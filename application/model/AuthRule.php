<?php

namespace app\model;

/**
 * InnoDB utf8_general_ci
 * Class AuthRule
 * @author  : evalor <master@evalor.cn>
 * @package App\Model
 * @property int id 规则id,自增主键
 * @property string module 规则所属module
 * @property int pid
 * @property int type 1-url;0-主菜单
 * @property string name 规则唯一英文标识
 * @property string title 规则中文描述
 * @property int status 是否有效(0:无效,1:有效)
 * @property string condition 规则附加条件
 * @property int is_menu 是否是按钮
 * @property string code
 * @property int is_btn 是否是按钮
 */
class AuthRule extends BaseModel
{
}
