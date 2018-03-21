<?php

namespace app\model;

/**
 * 商品信息表
 * InnoDB utf8_unicode_ci
 * Class ProductsInfo
 * @author  : evalor <master@evalor.cn>
 * @package App\Model
 * @property int product_id 商品编号
 * @property string product_code 商品条码
 * @property string product_name 商品名称
 * @property string product_subname 商品颜色
 * @property string product_size 商品大小
 * @property int product_cat
 * @property int product_brand
 * @property int product_readi
 * @property  product_desc
 * @property  product_subtitle
 * @property int product_serial
 * @property string product_weight
 * @property int product_online
 * @property int product_credit
 * @property int product_prom
 * @property int product_prom_limit
 * @property string product_prom_limitdate
 * @property int product_prom_limitdays
 * @property int product_prom_discount
 * @property float product_expfee 商品快递费用
 * @property int product_supplier
 * @property string product_storage 存储条件
 * @property string product_origin 商品产地
 * @property string product_unit 商品单位
 * @property int product_instocks 商品库存，在没有规格的时候此字段可用
 * @property string product_indexes 商品分类搜索索引
 * @property float supply_price
 * @property float sell_price
 * @property float market_price
 * @property string catimg
 * @property int sort
 * @property int is_delete
 */
class ProductsInfo extends BaseModel
{
}
