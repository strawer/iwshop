<?php

namespace app\model;

/**
 * InnoDB utf8_general_ci
 * Class AuthGroup
 * @author  : evalor <master@evalor.cn>
 * @package App\Model
 * @property int id 用户组id,自增主键
 * @property string module 用户组所属模块
 * @property int type 组类型
 * @property string title 用户组中文名称
 * @property string description 描述信息
 * @property int status 用户组状态：为1正常，为0禁用,-1为删除
 * @property  rules 用户组拥有的规则code，多个规则 , 隔开
 * @property int update_time
 * @property int create_time
 */
class AuthGroup extends BaseModel
{
}
