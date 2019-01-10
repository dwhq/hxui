<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>惠设计-个人设计网站</title>
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
<div class="header">
    <div class="header-nav">


        <!--header logo和标题-->
        <div class="header-left">
            <a href="{{url('/')}}" class="img-logo"><img src="img/logo.png" alt="logo"></a>
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


<!--banner中的文字-->
<div class="banner">
    <div class="banner-font">
        <div class="font-left  ">
            <p class="font1 animated fadeInUp" style="font-family: fontttf;">PERSONAL DESIGN WEBSITE</p>
            <p class="font2 animated fadeInUp" style="font-family: fontttf;">HELLO!</p>
            <p class="font2 animated fadeInUp" style="font-family: fontttf;">I AM XUAN HUI</p>
            <span class="color-block animated fadeInUp"></span>

            <p class="font4 animated fadeInUp" style="font-family: fontttf;">PROFESSIONAL UI设计师</p>

        </div>
        <div class="bottom-font ">
            <p class="font5 animated fadeInUp">EMAIL : {{config('config_email')}}</p>
            <p class="font6 animated fadeInUp">QQ : <a
                        href="http://wpa.qq.com/msgrd?v=3&uin=552343468&site=qq&menu=yes"
                        style="color: #999">{{config('qq')}}</a></p>
            <p class="font7 animated fadeInUp">独角兽工作室</p>
        </div>
    </div>
</div>


<div class="index-centant">


    <!--content导航-->
    <div class="content-nav">
        <ul class="an-li">
            <li class="all"><a href="javascript:;" onclick="setTab(0)" class="an-li-left"
                               style="font-family: fontttf; ">All</a></li>
            <li><a href="javascript:;" class="an-li-left" onclick="setTab(1)" style="font-family: fontttf;">APP
                    DESIGN</a></li>
            <li><a href="javascript:;" class="an-li-left" onclick="setTab(2)" style="font-family: fontttf;">WEB
                    DESIGN</a></li>
            <li><a href="javascript:;" class="an-li-left" onclick="setTab(3)" style="font-family: fontttf;">LOGO
                    DESIGN</a></li>
        </ul>


    </div>

    <!--content-->
    <div class="content clearfix tab-all">
        @foreach($list as $vo)
            <div class="content-box">
                <div class="box"><a href="{{url('content/'.$vo->id)}}"><img class="imgyt"
                                                                            src="{{asset('uploads/'.$vo->site)}}"></a>
                </div>
                <h3 class="box-font">{{$vo->title}}</h3>
            </div>
        @endforeach
    </div>
    <div class="content clearfix tab-app" style="display: none">
        @foreach($app as $vo)
            <div class="content-box">
                <div class="box"><a href="{{url('content/'.$vo->id)}}"><img class="imgyt"
                                                                            src="{{asset('uploads/'.$vo->site)}}"></a>
                </div>
                <h3 class="box-font">{{$vo->title}}</h3>
            </div>
        @endforeach
    </div>
    <div class="content clearfix tab-web" style="display: none">
        @foreach($web as $vo)
            <div class="content-box">
                <div class="box"><a href="{{url('content/'.$vo->id)}}"><img class="imgyt"
                                                                            src="{{asset('uploads/'.$vo->site)}}"></a>
                </div>
                <h3 class="box-font">{{$vo->title}}</h3>
            </div>
        @endforeach
    </div>
    <div class="content clearfix tab-logo" style="display: none">
        @foreach($logo as $vo)
            <div class="content-box">
                <div class="box"><a href="{{url('content/'.$vo->id)}}"><img class="imgyt"
                                                                            src="{{asset('uploads/'.$vo->site)}}"></a>
                </div>
                <h3 class="box-font">{{$vo->title}}</h3>
            </div>
        @endforeach
    </div>

</div>

<!--footer-->
<div class="footer">
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
            <img src="img/img_weixin.png" class="img-weixin">
            <p class="copyright">{!! config('copyright') !!}</p>

        </div>
    </div>
</div>


</body>
<script>
    var list = document.querySelectorAll('.content');
    var an_li = document.querySelectorAll('.an-li-left')
    an_li[0].style.color = '#333333'
    an_li[0].style.fontWeight = 'bold'
    var tab_id = 0;

    function setTab(id) {
        an_li[id].style.color = '#333333'
        an_li[id].style.fontWeight = 'bold'
        an_li[tab_id].style.color = '#999'
        list[tab_id].style.display = 'none'
        tab_id = id;
        list[id].style.display = '';
    }
</script>

</html>
