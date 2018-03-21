<?php

namespace app\model;

/**
 * InnoDB utf8_general_ci
 * Class GroupBuyLog
 * @author  : evalor <master@evalor.cn>
 * @package App\Model
 * @property int log_id
 * @property int order_id 订单ID
 * @property int tuan_id 团购ID
 * @property int client_id 会员ID
 * @property int product_id 商品ID
 * @property int num 购买数量。取值范围:大于零的整数
 * @property string remark 备注
 */
class GroupBuyLog extends BaseModel
{
}
