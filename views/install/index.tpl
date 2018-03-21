<!DOCTYPE HTML>
<html lang='zh-CN'>
<head>
    <meta http-equiv=Content-Type content="text/html;charset=utf-8"/>
    <title>iWshop Install Guide</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="static/install/wshop_install.css" type="text/css" rel="Stylesheet"/>
    <script type="text/javascript" charset="utf-8" src="static/libs/jquery/jquery3.2.1.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="static/libs/jquery/assistant.js"></script>
    <script type="text/javascript" charset="utf-8" src="static/libs/jquery-validation/jquery.validate.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="static/libs/jquery-validation/localization/messages_zh.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="static/install/wshop_install.js"></script>
</head>
<body>
<div id="center">
    <div id="logo"></div>
    <div id="errorinfo"></div>
    <div id="install-main">
        <form id="sept0" class="septs">
            <div class="clearfix" style="padding-bottom: 10px;">
                <div id="envs-test-1" class="left" style="width: 200px;">
                    <div class="head">环境检测</div>
                    <ul>
                        <li id="version_ok">PHP Ver 5.5.9 +<b></b></li>
                    </ul>
                </div>
                <div id="envs-test-2" class="left" style="width: 200px;">
                    <div class="head">扩展检测</div>
                    <ul>
                        <li id="ext_curl">CURL</li>
                        <li id="ext_pdo_mysql">PDO</li>
                        <li id="ext_gd">GD</li>
                        <li id="ext_mbstring">MB_STRING</li>
                        <li id="ext_openssl">OPENSSL</li>
                        <li id="ext_fileinfo">FILEINFO</li>
                    </ul>
                </div>
                <div id="envs-test-3" class="left" style="width: 220px;">
                    <div class="head">目录读写权限</div>
                    <ul>
                        <li id="dir_runtime">/runtime/</li>
                        <li id="dir_uploads">/public/uploads/</li>
                        <li id="dir_application">/application/</li>
                        <li id="dir_data">/data/</li>
                        <li id="dir_exports">/exports/</li>
                    </ul>
                </div>
            </div>
        </form>
        <form id="sept1" class="septs">
            <div class="field">
                <div class="gs-label">微店名称
                    <div class="gs-tip1"></div>
                </div>
                <div class="gs-text">
                    <input title="" name="f-shopname" class="required" tabindex="1" type="text" value="iWshop测试"/>
                    <div class="gs-tip">你自己微店的名称：比如“我的微店”</div>
                </div>
            </div>
            <div class="field">
                <div class="gs-label">数据库地址
                    <div class="gs-tip1"></div>
                </div>
                <div class="gs-text">
                    <input title="" name="f-dbaddress" class="required" tabindex="2" type="text" value="127.0.0.1"/>
                    <div class="gs-tip">数据库的地址：本地数据库是localhost，如果是localhost，推荐使用127.0.0.1</div>
                </div>
            </div>
            <div class="field">
                <div class="gs-label">数据库名
                    <div class="gs-tip1"></div>
                </div>
                <div class="gs-text">
                    <input title="" name="f-dbname" class="required" tabindex="3" type="text" value="iWshop"/>
                    <div class="gs-tip">数据库名，不存在则自动创建，需要数据库用户具有创建数据库权限。</div>
                </div>
            </div>
            <div class="field">
                <div class="gs-label">数据库端口
                    <div class="gs-tip1"></div>
                </div>
                <div class="gs-text">
                    <input title="" name="f-port" class="required" tabindex="4" type="text" value="3306" autocomplete="off"/>
                    <div class="gs-tip">数据库端口：默认为3306</div>
                </div>
            </div>
            <div class="field">
                <div class="gs-label">数据库用户名
                    <div class="gs-tip1"></div>
                </div>
                <div class="gs-text">
                    <input title="" name="f-dbusername" class="required" tabindex="5" type="text" value="root"/>
                    <div class="gs-tip">数据库用户名：默认为root</div>
                </div>
            </div>
            <div class="field">
                <div class="gs-label">数据库密码
                    <div class="gs-tip1"></div>
                </div>
                <div class="gs-text">
                    <input title="" name="f-dbpassword" class="required" tabindex="6" type="password" value="" autocomplete="off"/>
                    <div class="gs-tip">数据库密码</div>
                </div>
            </div>
        </form>
        <form id="sept2" class="septs">
            <div class="field">
                <div class="gs-label">APPID
                    <div class="gs-tip1"></div>
                </div>
                <div class="gs-text"><input title="" name="f-appid" class="required" tabindex="1" type="text"/>
                    <div class="gs-tip">微信公众号APPID</div>
                </div>
            </div>
            <div class="field">
                <div class="gs-label">APPSECRET
                    <div class="gs-tip1"></div>
                </div>
                <div class="gs-text"><input title="" name="f-appsecret" class="required" tabindex="2" type="text"/>
                    <div class="gs-tip">微信公众号APPSECRET</div>
                </div>
            </div>
            <div class="field">
                <div class="gs-label">TOKEN
                    <div class="gs-tip1"></div>
                </div>
                <div class="gs-text"><input title="" name="f-token" class="required" tabindex="3" type="text"/>
                    <div class="gs-tip">微信公众号验证TOKEN</div>
                </div>
            </div>
            <div class="field">
                <div class="gs-label">商户ID
                    <div class="gs-tip1"></div>
                </div>
                <div class="gs-text"><input title="" name="f-partner" class="required" tabindex="4" type="text"/>
                    <div class="gs-tip">微信支付商户ID，在微信支付开通邮件里面可以查看</div>
                </div>
            </div>
            <div class="field">
                <div class="gs-label">通加密串(partnerKey)
                    <div class="gs-tip1"></div>
                </div>
                <div class="gs-text"><input title="" name="f-partnerkey" class="required" tabindex="6" type="text"/>
                    <div class="gs-tip">商户通加密串(partnerKey)，在微信商户平台中API秘钥设置中设置</div>
                </div>
            </div>
            <div class="field">
                <div class="gs-label">系统根目录
                    <div class="gs-tip1"></div>
                </div>
                <div class="gs-text">
                    <input title="" name="f-docroot" id="docroot" class="required" tabindex="6" type="text"/>
                    <div class="gs-tip"></div>
                </div>
            </div>
            <input title="" type="hidden" value="" id="f-domain" name="f-domain"/>
        </form>
        <form id="sept3" class="septs">
            <div class="field">
                <div class="gs-label">管理员账号
                    <div class="gs-tip1"></div>
                </div>
                <div class="gs-text"><input title="" name="f-username" class="required" tabindex="1" type="text"/>
                    <div class="gs-tip">用于登录后台的管理员用户名</div>
                </div>
            </div>
            <div class="field">
                <div class="gs-label">管理员密码
                    <div class="gs-tip1"></div>
                </div>
                <div class="gs-text"><input title="" name="f-password" class="required" tabindex="2" type="password"/>
                    <div class="gs-tip">用户登录后台的管理员密码</div>
                </div>
            </div>
        </form>
        <div style="text-align: center">
            <a class="button green" id="install-btn0" href="javascript:void(0);">环境检测</a>
            <a class="button green" id="install-btn1" href="javascript:void(0);">下一步</a>
            <a class="button green" id="install-btn2" href="javascript:void(0);">马上安装</a>
            <a class="button green" id="install-btn3" href="javascript:void(0);">安装成功</a>
            <a class="button green" id="install-goback" href="javascript:void(0);">上一步</a>
        </div>
    </div>
</div>
</body>
</html>