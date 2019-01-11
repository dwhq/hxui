<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>about me</title>
    <style type="text/css">
        @font-face {
            font-family: fontttf;
            src: url('{{asset("css/font/geometos.woff.ttf")}}');
    </style>
    <!--------引入清楚浏览器默认样式-------->
    <link rel="stylesheet" type="text/css" href="{{asset('css/new_file.css')}}"/>
    <!--------引入huixuanui.index-------->
    <link rel="stylesheet" type="text/css" href="{{asset('css/huixuanui-index.1.css')}}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/img.css')}}"/>
    <script src="http://libs.baidu.com/jquery/2.1.4/jquery.min.js"></script>
</head>
<body>
<!--顶部header-->
<div class="header" style="float: none;">
    <div class="header-nav">


        <!--header logo和标题-->
        <div class="header-left">
            <a href="{{url('/')}}" class="img-logo"><img src="{{asset('img/logo.png')}}"  alt="logo" ></a>
            <h1 class="title"><a href="{{url('/')}}">个人设计网站</a></h1>
        </div>

        <!--header 导航-->
        <div class="header-right">
            <ul class="banner-nav">
                <li class="about-me"><a href="{{asset('about')}}" style="font-family: fontttf;">ABOUT</a> <em></em></li>
                <li><a href="{{url('/')}}" style="font-family: fontttf;">HOME</a><em></em></li>

            </ul>
        </div>
    </div>
</div>


<!--centent-page-->


<div class="content-page-main">
    <div class="page-font">
        <p class="page-title">{{$data->title}}</p>
    </div>
    <div class="img-main">
        {!! $data->content !!}
        {{--<div class="img_main_box">--}}
            {{--<img src="{{url('img/img_centent1.png')}}">--}}
        {{--</div>--}}
    </div>
</div>


<div class="footer" >
    <div class="footer-back">
        <!--分割线-->
        <div class="line">
        </div>
        <!--左边内容区-->
        <div class="footer-nav-content1">
            <h4 class="footer-font1">视觉设计&amp;网站开发</h4>
            <p class="footer-font2">品牌官网 / 手机网站 / 商场平台 / 营销型网站
                / H5多屏响应式 / 微信 小程序开发</p>
            <p class="footer-font3 font-www">联系网址<br/><a href="#" class="footer-font1">www.Unicornstudio.com </a></p>
        </div>
        <div class="footer-nav-content2">
            <h4 class="footer-font1">联系方式</h4>
            <p class="footer-font2"><span>Email</span> <br><a class="footer-font1">{{config('config_email')}}</a></p>
            <p class="footer-font3"><span>QQ</span><br/><a class="footer-font1"
                                                           href="http://wpa.qq.com/msgrd?v=3&uin=552343468&site=qq&menu=yes"
                                                           style="color: #999">{{config('qq')}}</a></p>
        </div>


        <!--右边内容区-->
        <div class="weixin">
            <img src="{{asset('img/img_weixin.png')}}" class="img-weixin">
            <p class="copyright">{!! config('copyright') !!}</p>

        </div>
    </div>
</div>
@include('home._returnTop')
</body>
</html>
