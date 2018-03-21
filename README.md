# 社区重构版

```
 __     __     __     ______     __  __     ______     ______  
/\ \   /\ \  _ \ \   /\  ___\   /\ \_\ \   /\  __ \   /\  == \ 
\ \ \  \ \ \/ ".\ \  \ \___  \  \ \  __ \  \ \ \/\ \  \ \  _-/ 
 \ \_\  \ \__/".~\_\  \/\_____\  \ \_\ \_\  \ \_____\  \ \_\   
  \/_/   \/_/   \/_/   \/_____/   \/_/\/_/   \/_____/   \/_/   
```

项目正在重构中，基于 ThinkPHP 5.0.15

## 环境要求

|名称|版本|说明|
|:---:|:---:|:---:|
|PHP|Ver 5.5.9 +|TP框架要求|
|PDO|不限|TP框架要求|
|MbString|不限|TP框架要求|
|CURL|不限|EasyWeChat要求|
|GD|不限|EasyWeChat要求|
|OpenSSL|不限|EasyWeChat要求|
|Fileinfo|不限|EasyWeChat要求|

## 安装

- 下载项目源码释放到 Web 目录
- 将 Web 入口设置为 /public/ 目录
- 设置伪静态规则
- 执行 `composer install` 进行依赖安装
- 访问网站 进行系统安装
- 编辑 /application/extra/wechat.php 文件 添加微信支付证书

## 链接

- [社区版本](https://github.com/sillydong/iwshop)
- [官方码云](https://gitee.com/koodo/iWshop)