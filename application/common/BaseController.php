<?php

namespace app\common;

use think\Controller;
use think\Response;

/**
 * 基础控制器 用于全局公共方法
 * Class BaseController
 * @author  : evalor <master@evalor.cn>
 * @package app\common
 */
class BaseController extends Controller
{
    /**
     * 写出Json响应数据
     * @param $retcode
     * @param $retmsg
     * @author : evalor <master@evalor.cn>
     * @return Response
     */
    protected function writeJsonData($retcode, $retmsg = '')
    {
        if (!is_array($retmsg)) {
            $data = array('retcode' => $retcode, 'retmsg' => urlencode($retmsg));
        } else {
            $data = array('retcode' => $retcode, 'retmsg' => $retmsg);
        }
        return new Response(urldecode(json_encode($data)), 200, ['Content-Type' => ' application/json; charset=utf-8']);
    }
}