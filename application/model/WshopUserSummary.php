<?php

namespace app\model;

/**
 * 微信粉丝统计数据
 * InnoDB utf8_general_ci
 * Class WshopUserSummary
 * @author  : evalor <master@evalor.cn>
 * @package App\Model
 * @property  ref_date
 * @property int user_source 0代表其他（包括带参数二维码） 3代表扫二维码 17代表名片分享 35代表搜号码（即微信添加朋友页的搜索） 39代表查询微信公众帐号 43代表图文页右上角菜单
 * @property int new_user
 * @property int cancel_user
 */
class WshopUserSummary extends BaseModel
{
}
