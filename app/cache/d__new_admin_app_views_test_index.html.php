<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--<meta charset="UTF-8">-->
<!--<title>Title</title>-->
<!--</head>-->
<!--<style>-->
<!--/*html, body {*/-->
<!--/*margin: 0;*/-->
<!--/*padding: 0;*/-->
<!--/*box-sizing: border-box;*/-->
<!--/*}*/-->
<!--/*#tar{*/-->
<!--/*margin-left: 50px;*/-->
<!--/*overflow:hidden;*/-->
<!--/*width: 320px;*/-->
<!--/*height: 30px;*/-->
<!--/*font-size:0;*/-->
<!--/*}*/-->
<!--/*#tab{*/-->
<!--/*min-width: 320px;*/-->
<!--/*height: 100%;*/-->
<!--/*position: relative;*/-->
<!--/*white-space: nowrap;*/-->
<!--/*display: inline-block;*/-->
<!--/*}*/-->
<!--/*#tab > li {*/-->
<!--/*width: 80px;*/-->
<!--/*height: 100%;*/-->
<!--/*font-size: 14px;*/-->
<!--/*border: solid 1px red;*/-->
<!--/*box-sizing: border-box;*/-->
<!--/*display: inline-block;*/-->
<!--/*}*/-->
<!--#test{-->
<!--border:solid 1px red;-->
<!--}-->
<!--img{-->
<!--width: 100px;-->
<!--height: 100px;-->
<!--}-->
<!--</style>-->
<!--<body>-->
<!--<div id="test">-->
<!--<img src="https://ss0.bdstatic.com/5aV1bjqh_Q23odCf/static/superman/img/logo/bd_logo1_31bdc765.png">-->
<!--</div>-->
<!--&lt;!&ndash;<div id="tar">&ndash;&gt;-->
<!--&lt;!&ndash;<ul id="tab">&ndash;&gt;-->
<!--&lt;!&ndash;<li>1</li>&ndash;&gt;-->
<!--&lt;!&ndash;<li>1</li>&ndash;&gt;-->
<!--&lt;!&ndash;<li>1</li>&ndash;&gt;-->
<!--&lt;!&ndash;<li>1</li>&ndash;&gt;-->
<!--&lt;!&ndash;<li>1</li>&ndash;&gt;-->
<!--&lt;!&ndash;<li>1</li>&ndash;&gt;-->
<!--&lt;!&ndash;<li>1</li>&ndash;&gt;-->
<!--&lt;!&ndash;<li>1</li>&ndash;&gt;-->
<!--&lt;!&ndash;<li>1</li>&ndash;&gt;-->
<!--&lt;!&ndash;<li>1</li>&ndash;&gt;-->
<!--&lt;!&ndash;<li>1</li>&ndash;&gt;-->
<!--&lt;!&ndash;<li>1</li>&ndash;&gt;-->
<!--&lt;!&ndash;<li>1</li>&ndash;&gt;-->
<!--&lt;!&ndash;<li>1</li>&ndash;&gt;-->
<!--&lt;!&ndash;<li>1</li>&ndash;&gt;-->
<!--&lt;!&ndash;<li>1</li>&ndash;&gt;-->
<!--&lt;!&ndash;<li>1</li>&ndash;&gt;-->
<!--&lt;!&ndash;<li>1</li>&ndash;&gt;-->
<!--&lt;!&ndash;<li>1</li>&ndash;&gt;-->
<!--&lt;!&ndash;<li>1</li>&ndash;&gt;-->
<!--&lt;!&ndash;<li>1</li>&ndash;&gt;-->
<!--&lt;!&ndash;<li>1</li>&ndash;&gt;-->
<!--&lt;!&ndash;<li>1</li>&ndash;&gt;-->
<!--&lt;!&ndash;</ul>&ndash;&gt;-->
<!--&lt;!&ndash;</div>&ndash;&gt;-->
<!--</body>-->
<!--<script src="/public/src/plugin/jquery/jquery.min.js"></script>-->
<!--<script>-->
<!--var tab = $("#tab"),-->
<!--position = 0,-->
<!--minTabwidth = 0,-->
<!--maxTabwidth = 0,-->
<!--tabWidth = tab.width(),-->
<!--tabchildWidth = parseInt(tab.children().css('width'));-->
<!--$(window).on({-->
<!--'click': function(){-->
<!--position = position + 80;-->
<!--console.log(tabWidth);-->
<!--console.log(position);-->
<!--console.log(tabchildWidth);-->
<!--tab.css('right',position +'px');-->
<!--},-->
<!--'contextmenu': function(){-->
<!--position = position - 80;-->
<!--console.log(parseInt(tabchildWidth));-->
<!--console.log(position);-->
<!--tab.css('right',position +'px');-->
<!--}-->
<!--})-->
<!--</script>-->
<!--</html>-->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>家教网</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        font-size: 12px;
    }

    #bt1 {
        width: 100%;
        height: 35px;
        border: solid 1px red;
    }

    #kuangjia {
        /*background-image: url(iamge/top_bg.jpg);*/
        width: 100%;
        height: 35px;
        /*margin: auto;*/
        border: solid 1px red;
    }

    .top1 li {
        float: left;
        margin: 10px;
    }

    .top2 li {
        float: right;
        margin: 10px;
    }

    .top1, .top2 {
        list-style-type: none;
        color: rgb(174, 174, 174);
    }

    #bg1 {
        /*background-image: url(iamge/top_logo_bg.jpg);*/
        width: 100%;
        height: 86px;

    }

    #bt2 {
        /*width: 1200px;*/
        /*margin: auto;*/
        height: 100%;
    }

    /*img{float: left;}*/
</style>
<body>
<div id="kuangjia">
    <div id="bt1">
        <ul class="top1">
            <li>用户名<input type="text" name="yonghuming"></li>
            <li>密码<input type="password" name="mima"></li>
            <li><input type="submit" name="denglu" value="登录"></li>
            <li><a href="https://www.baidu.com/">用户注册</a></li>
            <li><a href="https://www.baidu.com/">取回密码</a></li>
        </ul>
        <ul class="top2">
            <li>帮助中心</li>
            <li>加入收藏</li>
            <li>设为首页</li>
        </ul>
    </div>
</div>
<div style="clear: both"></div>
<div id="bg1">
    <div id="bt2">
        <img src="https://ss0.bdstatic.com/5aV1bjqh_Q23odCf/static/superman/img/logo/bd_logo1_31bdc765.png">
    </div>
</div>
</body>
</html>