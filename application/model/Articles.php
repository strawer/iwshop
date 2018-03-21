<?php

namespace app\model;

/**
 * 图文消息
 * InnoDB utf8_general_ci
 * Class Articles
 * @author  : evalor <master@evalor.cn>
 * @package App\Model
 * @property int id
 * @property string thumb_media_id 图文消息缩略图的media_id，可以在基础支持-上传多媒体文件接口中获得
 * @property string author
 * @property string title
 * @property string content_source_url
 * @property string content
 * @property string digest
 * @property int show_cover_pic
 */
class Articles extends BaseModel
{
}
