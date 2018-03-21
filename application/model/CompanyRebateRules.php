<?php

namespace app\model;

/**
 * 代理返佣规则
 * InnoDB utf8_general_ci
 * Class CompanyRebateRules
 * @author  : evalor <master@evalor.cn>
 * @package App\Model
 * @property int id
 * @property int level_id
 * @property string level_name
 * @property string rule_name 规则名称
 * @property int rebate_level
 * @property enum rebate_type 返佣方式, 固定金额或比例
 * @property float rebate_amount
 * @property  addtime
 * @property string remark
 * @property int enabled 是否启用此规则
 */
class CompanyRebateRules extends BaseModel
{
}
