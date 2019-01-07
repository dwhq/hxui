<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>个人网站</title>
    <style type="text/css">
        @font-face {
            font-family: fontttf;
            src: url('{{asset("css/font/geometos.woff.ttf")}}');
    </style>
    <!--------引入清楚浏览器默认样式-------->
    <link rel="stylesheet" type="text/css" href="{{asset('css/new_file.css')}}"/>
    <!--------引入huixuanui.index-------->
    <link rel="stylesheet" type="text/css" href="{{asset('css/huixuanui-index.1.css')}}"/>
    {{--<link rel="stylesheet" type="text/css" href="{{asset('css/font.css')}}"/>--}}
</head>

<body>


<!--顶部header-->
<div class="banner">
    <div class="header">

        <a href="#" class="img-logo"><img src="{{asset('img/logo.png')}}"></a>
        <h1 class="title"><a href="">个人设计网站</a></h1>

        <ul class="banner-nav">
            <li class="about-me"><a href="#" style="font-family: fontttf;">ABOUT ME</a></li>
            <li><a href="#" style="font-family: fontttf;">HOME</a></li>
        </ul>

    </div>

    <!--banner中的文字-->

    <div class="banner-font">
        <div class="font-left">
            <p class="font1" style="font-family: fontttf;">PERSONAL DESIGN WEBSITE</p>
            <p class="font2" style="font-family: fontttf;">HELLO! <br/>I AM XUAN HUI</p>
            <span class="color-block"></span>
            <p class="font4" style="font-family: fontttf;">PROFESSIONAL UI设计师</p>

        </div>
        <div class="bottom-font">
            <p class="font5">EMAIL : huixuan1114@qq.com</p>
            <p class="font6">QQ : 552343468</p>
            <p class="font7">独角兽工作室</p>
        </div>
    </div>
</div>

<!--content导航-->
<div class="content-nav">
    <ul class="an-li">
        <li class="all"><a href="javscript:;" onclick="setTab(0)" class="an-li-left" style="font-family: fontttf;">All</a></li>
        <li><a href="javscript:;" onclick="setTab(1)" class="an-li-left" style="font-family: fontttf;">APP DESIGN</a></li>
        <li><a href="javscript:;" onclick="setTab(2)" class="an-li-left" style="font-family: fontttf;">WEB DESIGN</a></li>
        <li><a href="javscript:;" onclick="setTab(3)" class="an-li-left" style="font-family: fontttf;">LOGO DESIGN</a></li>
    </ul>


</div>

<!--content-->
<div class="content clearfix tab-all">
    @foreach($list as $vo)
        <div class="content-box">
            <div class="box"><a href="#"><img src="{{asset('uploads/'.$vo->site)}}"></a></div>
            <h3 class="box-font">{{$vo->title}}</h3>
        </div>
    @endforeach
</div>
<div class="content clearfix tab-app" style="display: none">
    @foreach($app as $vo)
        <div class="content-box">
            <div class="box"><a href="#"><img src="{{asset('uploads/'.$vo->site)}}"></a></div>
            <h3 class="box-font">{{$vo->title}}</h3>
        </div>
    @endforeach
</div>
<div class="content clearfix tab-web" style="display: none">
    @foreach($web as $vo)
        <div class="content-box">
            <div class="box"><a href="#"><img src="{{asset('uploads/'.$vo->site)}}"></a></div>
            <h3 class="box-font">{{$vo->title}}</h3>
        </div>
    @endforeach
</div>
<div class="content clearfix tab-logo" style="display: none">
    @foreach($logo as $vo)
        <div class="content-box">
            <div class="box"><a href="#"><img src="{{asset('uploads/'.$vo->site)}}"></a></div>
            <h3 class="box-font">{{$vo->title}}</h3>
        </div>
    @endforeach
</div>

<!--footer-->
<div class="footer">
    <div class="line">
    </div>

    <div class="footer-nav-content1">
        <h4 class="footer-font1">视觉设计&amp;网站开发</h4>
        <p class="footer-font2">品牌官网 / 手机网站 / 商场平台 / 营销型网站
            / H5多屏响应式 / 微信 小程序开发</p>
        <p class="footer-font3">联系网址<br/><a href="#" class="footer-font1">www.Unicornstudio.com </a></p>
    </div>
    <div class="footer-nav-content2">
        <h4 class="footer-font1">UI视觉设计</h4>
        <p class="footer-font2">Email <br><a class="footer-font1">huixuan1114@qq.com</a></p>
        <p class="footer-font3">QQ<br/><a class="footer-font1"><a
                        href="http://wpa.qq.com/msgrd?v=3&uin=552343468&site=qq&menu=yes">552343468</a> </a></p>


    </div>
    <div class="weixin">
        <img src="{{asset('img/img_weixin.png')}}" class="img-weixin">
        <p class="copyright">©️2018-2019 Xuan Hui.All rights reserved.</p>

    </div>
</div>
</body>
<script>
    var list = document.querySelectorAll('.content');
    console.log(list);
    var tab_id = 0;
    function setTab(id) {
        list[tab_id].style.display='none'
        tab_id = id;
        list[id].style.display='';
    }
</script>
</html>
