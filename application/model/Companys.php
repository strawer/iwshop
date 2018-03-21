<?php

namespace app\model;

/**
 * 代理信息表
 * InnoDB utf8_general_ci
 * Class Companys
 * @author  : evalor <master@evalor.cn>
 * @package App\Model
 * @property int id
 * @property int uid 代理的用户编号
 * @property int gid 组ID
 * @property int parent
 * @property string name
 * @property string email
 * @property string phone
 * @property  join_date
 * @property string openid
 * @property  money
 * @property string alipay
 * @property string bank_name
 * @property string bank_account
 * @property string bank_personname
 * @property string person_id
 * @property string password
 * @property int deleted
 * @property int utype 已废弃字段
 * @property int verifed
 */
class Companys extends BaseModel
{
}
