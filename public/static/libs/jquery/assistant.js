jQuery.extend({
    serializeJson: function () {
        var serializeObj = {};
        var array = this.serializeArray();
        $(array).each(function () {
            if (serializeObj[this.name]) {
                if ($.isArray(serializeObj[this.name])) {
                    serializeObj[this.name].push(this.value);
                } else {
                    serializeObj[this.name] = [serializeObj[this.name], this.value];
                }
            } else {
                serializeObj[this.name] = this.value;
            }
        });
        return serializeObj;
    },
    showTips: function (message, warn, callback) {
        warn = warn || false;
        var node = $('<div id="__alert__"></div>');
        if (warn) {
            node.addClass('warn');
        } else {
            node.removeClass('warn');
        }
        node.html(message);
        $('body').append(node);
        node.css('left', ($('body').width() - node[0].clientWidth) / 2 + 'px').slideDown();
        window.setTimeout(function () {
            node.slideUp(300, function () {
                if (typeof callback === 'function') {
                    callback();
                }
                $('#__alert__').remove();
            });
        }, 3000);
    },
    hideTips: function () {
        $('#__alert__').remove();
    }
});

jQuery.fn.extend({
    serializeObject: $.serializeJson
});