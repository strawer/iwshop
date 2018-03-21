<?php

namespace app\model;

/**
 * InnoDB utf8_general_ci
 * Class OrdersDetail
 * @author  : evalor <master@evalor.cn>
 * @package App\Model
 * @property int detail_id
 * @property int order_id 订单编号
 * @property int product_id 商品编号
 * @property int product_count 商品数量
 * @property float product_discount_price
 * @property float original_amount
 * @property int product_price_hash_id
 * @property int refunded
 */
class OrdersDetail extends BaseModel
{
}
