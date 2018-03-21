// 安装向导处理脚本

var lock = false;
var envpass = false;
var sept = 0;

/** @namespace response.retcode */
/** @namespace response.retmsg */

var runSetup = function () {
    $('#sept0').show();
    $(window).bind('resize', resize).resize();
    $('#docroot').val(location.pathname.substr(0, location.pathname.lastIndexOf('/') + 1).replace('install/', ''));
    $('#f-domain').val(location.origin + '/');
    $('#install-goback').click(function () {
        hideError();
        goSept(--sept);
    });

    var vali = {
        errorPlacement: function (error, element) {
            element.parent().parent().find('.gs-tip1').eq(0).html(error);
        }
    };

    // 环境检测
    $('#install-btn0').click(function () {
        hideError();
        if (!envpass) {
            $.showTips('正在检查环境请稍等...');
            sendPost('/install/action/env', {}, function (response) {
                var retCode = response.retcode;
                var retData = response.retmsg;
                $.hideTips();
                if (retCode === 0) {
                    envpass = true;
                    $.each(retData, function (name, value) {
                        if (!value) {
                            envpass = false;
                            $('#' + name).removeClass('ok');
                            $('#' + name).addClass('no');
                        } else {
                            $('#' + name).addClass('ok');
                            $('#' + name).removeClass('no');
                        }
                    });
                    if (!envpass) {
                        $('#install-btn0').html('重新检测');
                    } else {
                        // 通过检测
                        $('#install-btn0').html('下一步');
                    }
                } else {
                    handelError(retData);
                }
            })
        } else {
            goSept(++sept);
        }
    });

    // 数据库检测
    $('#install-btn1').click(function () {
        hideError();
        var btn = $(this);
        if ($('#sept1').validate(vali).form()) {
            var formData = $('#sept1').serializeObject();
            btn.html("验证中...");
            sendPost('install/action/database', formData, function (response) {
                if (response.retcode === 0) {
                    goSept(++sept);
                    btn.html("下一步");
                    $.showTips('数据库连接成功 版本: ' + response.retmsg)
                } else {
                    btn.html("重新验证");
                    handelError(response.retmsg);
                }
            });
        }
    });

    // 数据库安装
    $('#install-btn2').click(function () {
        hideError();
        var btn = $(this);
        if ($('#sept2').validate(vali).form()) {
            var formData = $.extend($('#sept1').serializeObject(), $('#sept2').serializeObject());
            // 导入数据库
            btn.html("处理中...");
            sendPost('install/action/install', formData, function (response) {
                if (response.retcode === 0) {
                    goSept(++sept);
                    btn.html("下一步");
                    $.showTips('系统安装成功');
                } else {
                    handelError(response.retmsg)
                }
            })
        }
    });

    $('#install-btn3').click(function () {
        hideError();
        var btn = $(this);
        if ($('#sept3').validate(vali).form()) {
            var formData = $('#sept3').serializeObject();
            btn.html("处理中...");
            sendPost('install/action/reset', formData, function (response) {
                if (response.retcode === 0) {
                    location.href = $('#f-domain').val() + 'Wdmin';
                } else {
                    handelError(response.retmsg)
                }
            })
        }
    });

};

$(runSetup);


// 请求处理
var sendPost = function (url, data, callback) {
    $.post(url, data, function (r) {
        callback(r)
    })
};

// 窗口尺寸被改变
var resize = function () {
    var ele_center = $('#center');
    ele_center.animate({
        marginTop: ($(window).height() - ele_center.height()) / 2
    }, 200);
};

// 错误信息弹出
function handelError(msg) {
    $('#errorinfo').html(msg + '<br>遇到问题请加交流群: 470442221').show();
    resize();
}

// 错误信息隐藏
function hideError() {
    $('#errorinfo').hide();
}

// 进入下一步
function goSept(sept) {
    $('.septs').hide();
    $('#sept' + sept.toString()).show();
    $('#sept' + sept.toString()).find('input').eq(0).focus();
    $('.button').hide();
    $('#install-btn' + sept.toString()).css('display', 'inline-block');
    if (sept > 0) {
        $('#install-goback').css('display', 'inline-block');
    } else {
        $('#install-goback').hide();
    }
    resize();
}