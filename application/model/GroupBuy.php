<?php

namespace app\model;

/**
 * InnoDB utf8_general_ci
 * Class GroupBuy
 * @author  : evalor <master@evalor.cn>
 * @package App\Model
 * @property int tuan_id 团购ID
 * @property string tuan_title 团购标题
 * @property int product_id 商品ID
 * @property string tuan_picture 团购图片
 * @property  tuan_start_time 活动开始时间
 * @property  tuan_end_time 活动结束时间
 * @property float tuan_deposit_price 定金
 * @property int tuan_per_number 每人限购数量
 * @property int tuan_send_point 赠送积分数
 * @property int tuan_number 限购数量
 * @property int tuan_pre_number 虚拟购买数量
 * @property  tuan_desc 团购介绍
 * @property int tuan_goodshow_status 是否显示商品详情
 * @property int tuan_now_number 已团购数量
 * @property int tuan_order 显示次序
 * @property  tuan_create_time 团购创建时间
 * @property  tuan_update_time 团购更新时间
 * @property float tuan_price 团购价
 * @property int tuan_bid 团购所属品牌类目
 * @property int tuan_cid 团购所属分类
 * @property int tuan_baoyou 是否包邮：0：不包邮；1:包邮
 * @property string tuan_remark 团购简介
 * @property int tuan_start_code 是否启用验证码
 * @property  overdue_start_time 补交余款开始时间
 * @property  overdue_end_time 补交余款结束时间
 * @property int deleted 是否删除
 * @property int is_deposit 是否启用担保金
 * @property int is_active 状态
 */
class GroupBuy extends BaseModel
{
}
