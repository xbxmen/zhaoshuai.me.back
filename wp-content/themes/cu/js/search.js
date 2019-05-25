search();
$("#input-search").bind("input propertychange", function (event) {
    search();
});

// 搜索文章
function search() {
    var host = document.location.host;
    var protocol = document.location.protocol;

    var keyword = $("#input-search").val();
    if (keyword.length > 0) {
        $.ajax({
            type: "GET",
            url: protocol + '//' + host + "/wp-admin/admin-ajax.php?action=search&keyword=" + keyword,
            data: {},
            dataType: "json",
            success: function (data) {
                addArticle(data);
            },
            error: function (data) {
                console.log(data);
            }
        });
    }
}

String.prototype.format = function () {
    if (arguments.length === 0) {
        return this;
    }
    var param = arguments[0];
    var s = this;
    if (typeof (param) == 'object') {
        for (var key in param)
            s = s.replace(new RegExp("\\{" + key + "\\}", "g"), param[key]);
        return s;
    } else {
        for (var i = 0; i < arguments.length; i++)
            s = s.replace(new RegExp("\\{" + i + "\\}", "g"), arguments[i]);
        return s;
    }
};

function addArticle(data) {
    $("#articles").empty();
    var l = data.length;
    for (var i = 0; i < l; i++) {
        var article = data[i];
        var show_date = article['post_date'].split(' ')[0];
        var host = document.location.host;
        var protocol = document.location.protocol;

        var item = "<li id='post-{id}'>\n" +
            "        <time class='mod-archive__time' datetime='{post_date}'> {show_date} </time>\n" +
            "        <span>—</span>\n" +
            "        <a href='{post_link}' title='{post_title}'> {post_title} </a>\n" +
            "    </li>";

        var fix = {
            'id': article['id'],
            'show_date': show_date,
            'post_date': article['post_date'],
            'post_title': article['post_title'],
            'post_link': protocol + '//' + host + '/' + article['post_name']
        };

        $("#articles").append(item.format(fix));
    }
}
