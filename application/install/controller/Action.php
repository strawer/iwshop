<?php

namespace app\install\controller;

use app\common\BaseController;
use think\Db;
use think\db\Connection;
use think\helper\Hash;

/**
 * 安装操作
 * Class Action
 * @author  : evalor <master@evalor.cn>
 * @package app\install\controller
 */
class Action extends BaseController
{
    /**
     * 环境检测
     * @author : evalor <master@evalor.cn>
     * @return \think\Response
     */
    function env()
    {
        $envData = [
            // PHP 版本检测
            'version'         => phpversion(),
            'version_ok'      => version_compare(phpversion(), '5.5.9'),

            // 扩展类库检测
            'ext_curl'        => extension_loaded('curl'),
            'ext_pdo_mysql'   => extension_loaded('pdo'),
            'ext_gd'          => extension_loaded('gd'),
            'ext_mbstring'    => extension_loaded('mbstring'),
            'ext_openssl'     => extension_loaded('openssl'),
            'ext_fileinfo'    => extension_loaded('fileinfo'),

            // 目录读写检测
            'dir_runtime'     => $this->isWritableDir('runtime'),
            'dir_uploads'     => $this->isWritableDir('public/uploads'),
            'dir_application' => $this->isWritableDir('application'),
            'dir_data'        => $this->isWritableDir('data'),
            'dir_exports'     => $this->isWritableDir('exports')
        ];
        return $this->writeJsonData(0, $envData);
    }

    /**
     * 数据库检测
     * @author : evalor <master@evalor.cn>
     * @return \think\Response
     */
    function database()
    {
        try {
            $dbOptions = [
                'type'     => 'mysql',
                'hostname' => $this->request->post('f-dbaddress'),
                'username' => $this->request->post('f-dbusername'),
                'password' => $this->request->post('f-dbpassword'),
                'hostport' => $this->request->post('f-port'),
            ];
            $version   = Db::connect($dbOptions)->query('SELECT version() as version;');
            return $this->writeJsonData(0, explode('-', $version[0]['version'])[0]);
        } catch (\Exception $exception) {
            return $this->writeJsonData(-1, $exception->getMessage());
        }
    }

    /**
     * 数据库以及配置文件写入
     * @author : evalor <master@evalor.cn>
     * @return \think\Response
     */
    function install()
    {
        try {
            $dbOptions  = [
                'type'     => 'mysql',
                'hostname' => $this->request->post('f-dbaddress'),
                'username' => $this->request->post('f-dbusername'),
                'password' => $this->request->post('f-dbpassword'),
                'hostport' => $this->request->post('f-port'),
            ];
            $dbInstance = Db::connect($dbOptions);

            $databaseStructure = ROOT_PATH . 'data/database/iwshop.sql';
            $databaseSample    = ROOT_PATH . 'data/database/database.sample.php';
            $iWshopSample      = ROOT_PATH . 'data/iwshop.sample.php';
            $weChatSample      = ROOT_PATH . 'data/wechat.sample.php';

            $dbInstance->execute('DROP DATABASE IF EXISTS ' . $this->request->post('f-dbname') . ';');
            $dbInstance->execute('CREATE DATABASE IF NOT EXISTS ' . $this->request->post('f-dbname') . ' DEFAULT CHARSET utf8mb4 COLLATE utf8mb4_general_ci;');
            $dbOptions['database'] = $this->request->post('f-dbname');

            $dbInstance = Db::connect($dbOptions);
            $this->importDatabase($databaseStructure, $dbInstance);

            $this->writeSample($databaseSample, APP_PATH . 'database.php', [
                '__HOSTNAME__' => $dbOptions['hostname'],
                '__DATABASE__' => $dbOptions['database'],
                '__USERNAME__' => $dbOptions['username'],
                '__PASSWORD__' => $dbOptions['password'],
                '__HOSTPORT__' => $dbOptions['hostport'],
            ]);

            $this->writeSample($weChatSample, APP_PATH . 'extra/wechat.php', [
                '__APPID__'      => $this->request->post('f-appid'),
                '__APPSECRET__'  => $this->request->post('f-appsecret'),
                '__PARTNER__'    => $this->request->post('f-partner'),
                '__PARTNERKEY__' => $this->request->post('f-partnerkey'),
                '__TOKEN__'      => $this->request->post('f-token'),
            ]);

            $this->writeSample($iWshopSample, APP_PATH . 'extra/iwshop.php', [
                '__DOCROOT__'  => $this->request->post('f-docroot'),
                '__SHOPNAME__' => $this->request->post('f-shopname'),
                '__DOMAIN__'   => $this->request->post('f-domain')
            ]);

            return $this->writeJsonData(0);
        } catch (\Throwable $exception) {
            return $this->writeJsonData(-1, $exception->getMessage());
        }
    }

    /**
     * 重置管理员账号和密码
     * @author : evalor <master@evalor.cn>
     * @return \think\Response
     */
    function reset()
    {
        $username = $this->request->post('f-username');
        $password = $this->request->post('f-password');

        try {
            Db::name('admin')->where('id', 1)->update([
                'admin_name'     => $username,
                'admin_password' => Hash::make($password)
            ]);
            return $this->writeJsonData(0);
        } catch (\Throwable $exception) {
            return $this->writeJsonData(-1, $exception->getMessage());
        }
    }

    /**
     * 确认目录权限 有可能的话进行创建
     * @param string $Path 需要确认的目录
     * @author : evalor <master@evalor.cn>
     * @return bool 是否可写
     */
    private function isWritableDir($Path)
    {
        $Path = ROOT_PATH . '/' . trim($Path, '/') . '/';
        if (!is_dir($Path)) @mkdir($Path, 777) && @chmod($Path, 0777);
        return is_dir($Path) && is_writable($Path);
    }

    /**
     * 直接执行导出的数据库脚本文件
     * @param string     $execute    需要执行的脚本文件
     * @param Connection $dbInstance 数据库实例
     * @throws \Exception
     * @author : evalor <master@evalor.cn>\
     */
    private function importDatabase($execute, $dbInstance)
    {
        $content = file_get_contents($execute);
        preg_match_all("@([\s\S]+?;)\h*[\n\r]@", $content, $section);
        !empty($section[1]) && $section = $section[1];
        $count = count($section);
        if ($count <= 0) throw new \Exception('数据库文件解析失败 请检查安装包');
        $dbInstance->batchQuery($section);
    }

    /**
     * 替换样板数据并写出到指定目录
     * @param string $source     样板源文件
     * @param string $distribute 写出到文件(覆盖模式)
     * @param array  $data       数组 需要覆盖的变量列表
     * @author : evalor <master@evalor.cn>
     */
    private function writeSample($source, $distribute, $data)
    {
        $content = file_get_contents($source);
        foreach ($data as $name => $value) {
            $content = str_replace($name, $value, $content);
        }
        file_put_contents($distribute, $content);
    }
}