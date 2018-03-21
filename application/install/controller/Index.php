<?php

namespace app\install\controller;

use app\common\BaseController;

/**
 * 安装向导主控制器
 * Class Index
 * @author  : evalor <master@evalor.cn>
 * @package app\install\controller
 */
class Index extends BaseController
{
    function index()
    {
        return $this->fetch('install/index');
    }
}