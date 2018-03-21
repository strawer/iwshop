<?php

namespace app\model;

/**
 * 用户信息表
 * InnoDB utf8_general_ci
 * Class Clients
 * @author  : evalor <master@evalor.cn>
 * @package App\Model
 * @property int client_id 会员卡号
 * @property int cardno 线下会员卡号
 * @property string client_nickname
 * @property string client_name 会员姓名
 * @property string client_sex 会员性别
 * @property string client_phone 会员电话
 * @property string client_email
 * @property string client_head
 * @property  client_head_lastmod
 * @property string client_password 会员密码
 * @property int client_level 会员种类\r\n1为普通会员\r\n0为合作商
 * @property string client_wechat_openid 会员微信openid
 * @property  client_joindate
 * @property string client_province
 * @property string client_city
 * @property string client_address 会员住址
 * @property float client_money 会员存款
 * @property int client_credit 会员积分
 * @property string client_remark 会员备注
 * @property int client_groupid
 * @property int client_storeid 会员所属店号
 * @property string client_personid
 * @property int client_comid 代理编号
 * @property int client_autoenvrec
 * @property float client_overdraft_amount 用户信用总额
 * @property int is_com
 * @property int deleted 是否删除
 */
class Clients extends BaseModel
{
}
