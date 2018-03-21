<?php

namespace app\model;

/**
 * 订单返佣表
 * InnoDB utf8_general_ci
 * Class OrderRebates
 * @author  : evalor <master@evalor.cn>
 * @package App\Model
 * @property int id
 * @property int uid
 * @property int comid
 * @property int order_id
 * @property float order_amount
 * @property string order_serial 订单流水号
 * @property  order_time 下单时间
 * @property float rebate_amount 返佣金额
 * @property string rebate_type 返佣方式
 * @property float rebate_rate 返佣比率
 * @property int rebate_level 返佣级别
 * @property  rtime
 * @property enum status
 * @property string remark 备注
 */
class OrderRebates extends BaseModel
{
}
