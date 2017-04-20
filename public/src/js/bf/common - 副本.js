/**
 * Created by Pides on 16/1/19.
 */
function md5(str){var sAscii=" !\"#$%&'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ";sAscii=sAscii+"[\\]^_`abcdefghijklmnopqrstuvwxyz{|}~";var sHex="0123456789ABCDEF";function hex(i){var h="",j;for(j=0;j<=3;j++){h+=sHex.charAt((i>>(j*8+4))&0x0F)+sHex.charAt((i>>(j*8))&0x0F)}return h}function add(x,y){return((x&0x7FFFFFFF)+(y&0x7FFFFFFF))^(x&0x80000000)^(y&0x80000000)}function R1(A,B,C,D,X,S,T){var q=add(add(A,(B&C)|(~B&D)),add(X,T));return add((q<<S)|((q>>(32-S))&(Math.pow(2,S)-1)),B)}function R2(A,B,C,D,X,S,T){var q=add(add(A,(B&D)|(C&~D)),add(X,T));return add((q<<S)|((q>>(32-S))&(Math.pow(2,S)-1)),B)}function R3(A,B,C,D,X,S,T){var q=add(add(A,B^C^D),add(X,T));return add((q<<S)|((q>>(32-S))&(Math.pow(2,S)-1)),B)}function R4(A,B,C,D,X,S,T){var q=add(add(A,C^(B|~D)),add(X,T));return add((q<<S)|((q>>(32-S))&(Math.pow(2,S)-1)),B)}function md(S,L5){var L=(((S.length+8)>>6)+1)<<4;var X=new Array(L),i,j=4,a,b,c,d,_a,_b,_c,_d;for(i=0;(i*4)<S.length;i++){X[i]=0;for(j=0;(j<4)&&((j+i*4)<S.length);j++){X[i]+=(sAscii.indexOf(S.charAt((i*4)+j))+32)<<(j*8)}}if(j==4){X[i++]=0x80}else{X[i-1]+=0x80<<(j*8)}for(;i<L;i++){X[i]=0}X[L-2]=S.length*8;a=0x67452301;b=0xefcdab89;c=0x98badcfe;d=0x10325476;for(i=0;i<L;i+=16){_a=a;_b=b;_c=c;_d=d;a=R1(a,b,c,d,X[i+0],7,0xd76aa478);d=R1(d,a,b,c,X[i+1],12,0xe8c7b756);c=R1(c,d,a,b,X[i+2],17,0x242070db);b=R1(b,c,d,a,X[i+3],22,0xc1bdceee);a=R1(a,b,c,d,X[i+4],7,0xf57c0faf);d=R1(d,a,b,c,X[i+5],12,0x4787c62a);c=R1(c,d,a,b,X[i+6],17,0xa8304613);b=R1(b,c,d,a,X[i+7],22,0xfd469501);a=R1(a,b,c,d,X[i+8],7,0x698098d8);d=R1(d,a,b,c,X[i+9],12,0x8b44f7af);c=R1(c,d,a,b,X[i+10],17,0xffff5bb1);b=R1(b,c,d,a,X[i+11],22,0x895cd7be);a=R1(a,b,c,d,X[i+12],7,0x6b901122);d=R1(d,a,b,c,X[i+13],12,0xfd987193);c=R1(c,d,a,b,X[i+14],17,0xa679438e);b=R1(b,c,d,a,X[i+15],22,0x49b40821);a=R2(a,b,c,d,X[i+1],5,0xf61e2562);d=R2(d,a,b,c,X[i+6],9,0xc040b340);c=R2(c,d,a,b,X[i+11],14,0x265e5a51);b=R2(b,c,d,a,X[i+0],20,0xe9b6c7aa);a=R2(a,b,c,d,X[i+5],5,0xd62f105d);d=R2(d,a,b,c,X[i+10],9,0x2441453);c=R2(c,d,a,b,X[i+15],14,0xd8a1e681);b=R2(b,c,d,a,X[i+4],20,0xe7d3fbc8);a=R2(a,b,c,d,X[i+9],5,0x21e1cde6);d=R2(d,a,b,c,X[i+14],9,0xc33707d6);c=R2(c,d,a,b,X[i+3],14,0xf4d50d87);b=R2(b,c,d,a,X[i+8],20,0x455a14ed);a=R2(a,b,c,d,X[i+13],5,0xa9e3e905);d=R2(d,a,b,c,X[i+2],9,0xfcefa3f8);c=R2(c,d,a,b,X[i+7],14,0x676f02d9);b=R2(b,c,d,a,X[i+12],20,0x8d2a4c8a);a=R3(a,b,c,d,X[i+5],4,0xfffa3942);d=R3(d,a,b,c,X[i+8],11,0x8771f681);c=R3(c,d,a,b,X[i+11],16,0x6d9d6122);b=R3(b,c,d,a,X[i+14],23,0xfde5380c);a=R3(a,b,c,d,X[i+1],4,0xa4beea44);d=R3(d,a,b,c,X[i+4],11,0x4bdecfa9);c=R3(c,d,a,b,X[i+7],16,0xf6bb4b60);b=R3(b,c,d,a,X[i+10],23,0xbebfbc70);a=R3(a,b,c,d,X[i+13],4,0x289b7ec6);d=R3(d,a,b,c,X[i+0],11,0xeaa127fa);c=R3(c,d,a,b,X[i+3],16,0xd4ef3085);b=R3(b,c,d,a,X[i+6],23,0x4881d05);a=R3(a,b,c,d,X[i+9],4,0xd9d4d039);d=R3(d,a,b,c,X[i+12],11,0xe6db99e5);c=R3(c,d,a,b,X[i+15],16,0x1fa27cf8);b=R3(b,c,d,a,X[i+2],23,0xc4ac5665);a=R4(a,b,c,d,X[i+0],6,0xf4292244);d=R4(d,a,b,c,X[i+7],10,0x432aff97);c=R4(c,d,a,b,X[i+14],15,0xab9423a7);b=R4(b,c,d,a,X[i+5],21,0xfc93a039);a=R4(a,b,c,d,X[i+12],6,0x655b59c3);d=R4(d,a,b,c,X[i+3],10,0x8f0ccc92);c=R4(c,d,a,b,X[i+10],15,0xffeff47d);b=R4(b,c,d,a,X[i+1],21,0x85845dd1);a=R4(a,b,c,d,X[i+8],6,0x6fa87e4f);d=R4(d,a,b,c,X[i+15],10,0xfe2ce6e0);c=R4(c,d,a,b,X[i+6],15,0xa3014314);b=R4(b,c,d,a,X[i+13],21,0x4e0811a1);a=R4(a,b,c,d,X[i+4],6,0xf7537e82);d=R4(d,a,b,c,X[i+11],10,0xbd3af235);c=R4(c,d,a,b,X[i+2],15,0x2ad7d2bb);b=R4(b,c,d,a,X[i+9],21,0xeb86d391);a=add(a,_a);b=add(b,_b);c=add(c,_c);d=add(d,_d)}if(L5==32){return hex(a)+hex(b)+hex(c)+hex(d)};if(L5==16){return hex(b)+hex(c)}}return md(str,16)}
$(function(){

    var PP = {};
    PP.goto = function(e){
        PP.Window.show(e.data.title);
    };
    PP.Nav = {
        activeCls:'active',
        init: function () {
            PP.Nav.el = $("#nav");
            PP.Nav.create();
        },
        create: function(){
            var navList = $('.list',PP.Nav.el);
            var i, a,targetId = '';
            var list = eval(navList.attr('data-value'));
            for (i = 0; i < list.length; i++) {
                a = "<a href='javascript:;' data-title='"+ list[i].title + "'"+
                    "class='" + (list[i].cls || '') + "'>" +
                    "<i class='" + list[i].ico + "'></i></a>";
                a = $(a);
                a.on('click',list[i],PP.goto);
                navList.append(a);
                PP.Window.create(list[i]);
            }
            navList.on('click', 'a', function () {
                $(this).addClass(PP.Nav.activeCls).siblings().removeClass(PP.Nav.activeCls);
            });
        }
    };

    PP.Window = {
        list:[],
        cMenuEl:null,
        init:function(){
            PP.Window.el = $('#window');
        },
        create:function(data){
            data = data || {};
            var menuList = '';
            for (var i in data.list){
                menuList += "<li class='item'><a href='javascript:;' id='"+data.list[i].id+"' data-url='"+data.list[i].url+"' onclick='goto(this)'>" + data.list[i].title + "</a></li>";
            }
            var html = "<div class='iframe' id='"+data.title+"' style='display: none;z-index: 100;'>" +
                "<div class='header'>" +
                "<span class='title'>" + data.title +"</span>" +
                "<div class='tab-list'>" +
                "<ul></ul>" +
                "<div class='btn-group flr-right'>" +
                "<button><i class='pic-plus'></i></button>" +
                "</div></div></div>" +
                "<div class='menu'><ul>" + menuList + "</ul></div>" +
                "<div class='content-list' ><div class='content' style='text-align: center'><h2>欢迎进入"+data.title+"</h2></div></div>"+
                "</div>";
            html = $(html);
            PP.Window.el.append(html);
            PP.Window.list.push({id:data.title,html:html});
        },
        hide:function(){
            var len = PP.Window.list.length;
            if(!len)return;
            for (var i =0;i < len; i++){
                PP.Window.list[i].html.hide();
            }
        },
        show:function(id){
            PP.Window.hide();
            var len = PP.Window.list.length;
            if(!len)return;
            for (var i =0;i < len; i++){
                if(PP.Window.list[i].id == id){
                    PP.Window.list[i].html.show();
                    break;
                }
            }
        }
    };
    PP.Window.Iframe = !function(){
        var tabs = [],
            iframes = [];

        function create(el){
            var parent,
                tabList,
                contentList,
                target,
                tabNum,
                tabchild,
                contentchild;
            parent = el.parents('.iframe');
            target = parent.attr('id');
            tabList = parent.find("div .tab-list > ul");
            contentList = parent.find("div .content");
            tabList.find("li").removeClass(PP.Nav.activeCls);
            tabNum = tabList.children().length;
            tabchild = '<li class="item active" data-id="'+tabNum+'"><span><label>'+el.html()+'</label></span><i class="tri"></i></li>';
            contentchild = '<iframe frameborder="0" data-id="'+tabNum+'" src="'+el.attr("data-url")+'">';
            contentList.find("iframe").hide();
            tabchild = $(tabchild);
            tabchild.on({
                "click" : function(){

                },
                "dblclick" : function(){
                    var _this = $(this), index = _this.attr("data-id");
                    _this.remove();
                    contentList.find("iframe[data-id='"+index+"']").remove();
                },
                "contextmenu" : function(e){
                    PP.Window.cMenuEl.show(e,$(this));
                    event.stopPropagation();
                    e.preventDefault();
                }
            });
            tabList.append(tabchild);
            contentList.append(contentchild);
        }
        function goto(el){
            el = $(el);
            create(el);
        }
        function toggle(el, content){
            var index = el.attr("data-id");
            content.find("iframe").hide();
            el.parent().children().removeClass(PP.Nav.activeCls);
            el.addClass(PP.Nav.activeCls);
            content.find("iframe[data-id='"+index+"']").show();
        }
        window.goto = goto;
        return {
            create : create
        }
    }();

    var tabContextmenu = {
        bars: '',
        iframes: '',
        isInit: '',
        init: function(){
            tabContextmenu.isInit = 'true';
            tabContextmenu.bars = $(".tab-list > ul");
            tabContextmenu.iframes = $(".content-list > .content");
        },
        delAll: function(){
            if(!tabContextmenu.isInit) tabContextmenu.init();
            tabContextmenu.bars.find("li").remove();
            tabContextmenu.iframes.find("iframe").remove();
        },
        delThis: function(el){
            if(!tabContextmenu.isInit) tabContextmenu.init();
            tabContextmenu.bars.find("li[data-id='"+el+"']").remove();
            tabContextmenu.iframes.find("iframe[data-id='"+el+"']").remove();
        },
        delRight: function(el){
            if(!tabContextmenu.isInit) tabContextmenu.init();
            tabContextmenu.bars.find("li[data-id]:gt("+el+")").remove();
            tabContextmenu.iframes.find("iframe[data-id]:gt("+el+")").remove();
        }
    };


    PP.Native = {};
    PP.Native.Datagrid = function(){

    };
    window.PP = PP;
    $(function(){
        PP.Window.cMenuEl = new CMenu({
            id:"top_cmune"
        });
        PP.Window.init();
        PP.Nav.init();
    });

    function CMenu(cfg){
        this.cfg = cfg;
        this.el = null;
        if(!this.cfg.id)return false;
        this.init();
        return this;
    }

    CMenu.prototype.init = function () {
        var id = this.cfg.id;
        this.el = $("#" + id);
        this.initEvent();
        return true;
    };

    CMenu.prototype.initEvent = function () {
        var _this = this;
        var activeCls = this.cfg.activeCls ? this.cfg.activeCls : "cmactive";
        this.el.find("div").on({
            "click": function(){
                var $this = $(this), $par = $this.parent();
                !function(callback){
                        eval(callback)(_this.el.data("target_id"));
                }($par.data("options")+"."+$this.data("options"));
            },
            "mousemove": function(){
                $(this).addClass(activeCls);
            },
            "mouseout": function(){
                $(this).removeClass(activeCls);
            }
        });
        $(window).on({
            "click": function(){
                _this.el.hide();
            },
            "contextmenu": function(){
                _this.el.hide();
            }
        });
    };

    CMenu.prototype.show = function (e,target) {
        this.el.data("target_id",target.data("id"));
        this.el.css({"top": e.pageY,"left":e.pageX}).show();
    };

});
function test(){
    alert(1);
}