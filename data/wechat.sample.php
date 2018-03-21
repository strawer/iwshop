<?php

return [
    'app_id'  => '__APPID__',         // AppID
    'secret'  => '__APPSECRET__',     // AppSecret
    'token'   => '__TOKEN__',         // Token
    'aes_key' => '',                  // EncodingAESKey 安全模式与兼容模式下请一定要填写
    'payment' => [
        'merchant_id' => '__PARTNER__',    // 商户编号
        'key'         => '__PARTNERKEY__', // 商户加密串
        'cert_path'   => ROOT_PATH . 'data/cert/apiclient_cert.pem',  // 微信支付CERT证书 绝对路径
        'key_path'    => ROOT_PATH . 'data/cert/apiclient_key.pem',   // 微信支付KEY证书 绝对路径
    ],
    // ---------------------------
    // - 如不清楚作用 请勿改动以下配置
    // ---------------------------
    'log'     => [
        'level'      => 'debug',
        'permission' => 0777,
        'file'       => RUNTIME_PATH . 'easyWechat.log',
    ],
    'oauth'   => [
        'scopes'   => ['snsapi_userinfo'],
        'callback' => '/callback/oauth_callback',
    ],
    'guzzle'  => [
        'timeout' => 5.0, // API超时时间（秒）
    ],
];