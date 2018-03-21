<?php

namespace app\model;

/**
 * 用户购物车
 * InnoDB utf8_general_ci
 * Class ClientCart
 * @author  : evalor <master@evalor.cn>
 * @package App\Model
 * @property int id
 * @property string openid 用户编号
 * @property int product_id 商品编号
 * @property int spec_id 商品规格
 * @property int count 商品数量
 */
class ClientCart extends BaseModel
{
}
