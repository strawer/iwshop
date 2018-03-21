<?php

namespace app\model;

/**
 * 用户提现表
 * InnoDB utf8_general_ci
 * Class ClientWithdrawalOrder
 * @author  : evalor <master@evalor.cn>
 * @package App\Model
 * @property int id
 * @property int uid
 * @property string openid
 * @property float amount
 * @property string username
 * @property string phone
 * @property string bankname
 * @property string subbranch
 * @property string city
 * @property string dist
 * @property string cardno
 * @property  rtime
 * @property enum status
 * @property string serial 订单编号
 * @property string remark
 */
class ClientWithdrawalOrder extends BaseModel
{
}
