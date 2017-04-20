<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>后台管理</title>
    
    <script src="http://127.0.0.1:8080/public/dist/js/index.js"></script>
        <!--<script src="/public/dist/js/common.js"></script>-->
        <!--<script src="/public/dist/js/admin/index.js"></script>-->
</head>
<body>

<style>
    .table thead tr th,.table tbody tr td{
        height:50px;
        line-height: 50px;
        padding: 0;
        padding-left: 8px;
        padding-right: 8px;
    }
    .table thead tr th:first-child,.table tbody tr td:first-child{
        padding-left: 20px;
    }
    .table thead tr{
        background-color: #EFF0F4;
    }
    .table thead tr th{
        color: #6D7287;
        line-height: 50px;
    }

    .table tbody tr.active{
        background-color: #FEFAEE;
        padding-left: 15px;
        border-left: 5px solid #6697FB;
    }
    .table tbody tr.active td:first-child{
        padding-left: 17px;

    }
    .table tbody tr.active td{
        background-color: #FEFAEE;
    }
</style>
<div id="container">
    <div id="nav">
        <a href="javascript:;" class="search"><i class="pic-search "></i></a>
        <div class="list" data-value='<?= $nav ?>'>

        </div>

        <div class="hr"></div>
        <div class="user">
            <div class="hr"></div>
            <img src="/public/img/photo.jpg" class="img-circle" alt="">
            <span class="badge">3</span>
        </div>
    </div>
    <div class="window" id="window">
        <div class="iframe">
            <div class="header">
                <span class="title">用户中心</span>
                <div class="tab-list">
                    <ul class="tab-slide">
                        <li class="item active"><span><label>全部用户111111111111111</label></span><i class="tri"></i></li>
                        <li class="item "><span><label>全部用户2</label></span><i class="tri"></i></li>
                        <li class="item "><span><label>全部用户3</label></span><i class="tri"></i></li>
                        <li class="item "><span><label>全部用户4</label></span><i class="tri"></i></li>
                        <li class="item "><span><label>全部用户5</label></span><i class="tri"></i></li>
                        <li class="item "><span><label>全部用户6</label></span><i class="tri"></i></li>
                        <li class="item "><span><label>全部用户7</label></span><i class="tri"></i></li>
                        <li class="item "><span><label>全部用户8</label></span><i class="tri"></i></li>
                        <li class="item "><span><label>全部用户9</label></span><i class="tri"></i></li>
                        <li class="item "><span><label>全部用户10</label></span><i class="tri"></i></li>
                        <li class="item "><span><label>全部用户11</label></span><i class="tri"></i></li>
                        <li class="item "><span><label>全部用户12</label></span><i class="tri"></i></li>
                        <li class="item "><span><label>全部用户13</label></span><i class="tri"></i></li>
                        <li class="item "><span><label>全部用户14</label></span><i class="tri"></i></li>
                        <li class="item "><span><label>全部用户15</label></span><i class="tri"></i></li>
                        <li class="item "><span><label>全部用户16</label></span><i class="tri"></i></li>
                        <li class="item "><span><label>全部用户17</label></span><i class="tri"></i></li>
                        <li class="item "><span><label>全部用户18</label></span><i class="tri"></i></li>
                        <li class="item "><span><label>全部用户19</label></span><i class="tri"></i></li>
                        <li class="item "><span><label>全部用户19</label></span><i class="tri"></i></li>
                        <li class="item "><span><label>全部用户19</label></span><i class="tri"></i></li>
                        <li class="item "><span><label>全部用户19</label></span><i class="tri"></i></li>
                    </ul>
                    <!--<div class="btn-group flr-right">-->
                        <!--<button><i class="pic-plus"></i></button>-->
                    <!--</div>-->
                </div>
            </div>
            <div class="menu">
                <ul>
                    <li class="item "><a href="javascript:;">新增用户</a></li>
                    <li class="item active"><a href="javascript:;">用户列表</a></li>
                    <li class="item"><a href="javascript:;">已删除用户</a></li>
                    <li class="item"><a href="javascript:;">黑名单</a></li>
                    <li class="item"><a href="javascript:;">禁用用户</a></li>
                </ul>
            </div>
            <div class="content-list">
                <div class="content">
                    <div class="list ">
                        <div class="top">
                                <label>5个用户</label>
                            <div class="btn-group flr-right">
                                <button><i class="pic-pencil "></i></button>
                                <button><i class="pic-trash "></i></button>
                                <button><i class="pic-ban-circle "></i></button>
                            </div>
                        </div>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th><input type="checkbox"></th>
                                    <th>用户名</th>
                                    <th>手机号</th>
                                    <th>邮箱</th>
                                    <th>状态</th>
                                    <th align="right" style="text-align: right">最后登录时间</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td>Pides</td>
                                    <td>13202017741</td>
                                    <td>1029537990@qq.com</td>
                                    <td>正常</td>
                                    <td style="text-align: right">2016-06-27 09:00:00</td>
                                </tr>
                                <tr class="active">
                                    <td><input type="checkbox"></td>
                                    <td>Pides</td>
                                    <td>13202017741</td>
                                    <td>1029537990@qq.com</td>
                                    <td>正常</td>
                                    <td style="text-align: right">2016-06-27 09:00:00</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td>Pides</td>
                                    <td>13202017741</td>
                                    <td>1029537990@qq.com</td>
                                    <td>正常</td>
                                    <td style="text-align: right">2016-06-27 09:00:00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="contextmenu" id="top_cmune" data-options="tabContextmenu">
    <div data-options="delThis">关闭标签</div>
    <div data-options="delRight">关闭右侧标签</div>
    <div data-options="delOther">关闭其他标签</div>
    <div data-options="delAll">关闭所有标签</div>
</div>
<script>
    /*PP.Nav.init([
        {
            cls:PP.Nav.activeCls,
            ico:"pic-user",
            list:[
                {
                    title:'新增用户',
                    url:'member/edit'
                }
            ]
        },
        {
            ico:"pic-legal",
            list:{
                title:'全部订单',
                url:'member/edit'
            }
        },
        {
            ico:"pic-file-alt",
            list:{
                title:'全部订单',
                url:'member/edit'
            }
        },{
            ico:"pic-cogs",
            list:{
                title:'全部订单',
                url:'member/edit'
            }
        }
    ]);*/
</script>

</body>

