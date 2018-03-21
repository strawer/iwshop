<?php

namespace app\model;

/**
 * 用户充值表
 * InnoDB utf8_general_ci
 * Class ClientDepositOrder
 * @author  : evalor <master@evalor.cn>
 * @package App\Model
 * @property int id
 * @property string openid
 * @property float amount
 * @property  deposit_time
 * @property enum deposit_status
 * @property string deposit_serial 订单编号
 * @property string wepay_serial
 * @property string remark
 */
class ClientDepositOrder extends BaseModel
{
}
