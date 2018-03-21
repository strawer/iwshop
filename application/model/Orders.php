<?php

namespace app\model;

/**
 * InnoDB utf8_general_ci
 * Class Orders
 * @author  : evalor <master@evalor.cn>
 * @package App\Model
 * @property int order_id 订单编号
 * @property int client_id 客户编号
 * @property string serial_number
 * @property  order_time 订单交易时间
 * @property  receive_time 收货时间
 * @property  send_time 发货时间
 * @property float order_balance 余额抵现
 * @property float order_expfee 订单运费
 * @property float order_amount 总价
 * @property float order_refund_amount
 * @property float order_discounted 订单折扣比例
 * @property float supply_price_amount
 * @property float original_amount
 * @property int company_id
 * @property int product_count
 * @property string wepay_serial
 * @property string wepay_openid
 * @property string wepay_unionid
 * @property string wepayed 订单是否已支付
 * @property  leword
 * @property enum status 订单状态
 * @property string express_openid
 * @property string express_code
 * @property string express_com
 * @property string exptime
 * @property int envs_id
 * @property int is_commented
 * @property string address_hash
 * @property int supplier_id
 * @property int rebated 返佣是否已经处理
 * @property float rebated_amount 已经返佣的金额
 */
class Orders extends BaseModel
{
}
