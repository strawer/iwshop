<?php

namespace app\model;

/**
 * InnoDB utf8_general_ci
 * Class Wechats
 * @author  : evalor <master@evalor.cn>
 * @package App\Model
 * @property int wechat_id
 * @property string wechat_name 公众号名称
 * @property string account 帐号
 * @property string original_account 原始帐号
 * @property string app_id
 * @property string app_secret
 * @property string encodingaeskey
 * @property string token 验证token
 * @property string entry_hash 入口hash用于区别所属公众号
 * @property string url 服务器地址
 * @property string access_token
 */
class Wechats extends BaseModel
{
}
