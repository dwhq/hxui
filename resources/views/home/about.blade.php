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
    <link rel="stylesheet" type="text/css" href="{{asset('css/about-me.css')}}"/>
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
                <li class="about-me"><a href="#" style="font-family: fontttf;">ABOUT</a></li>
                <li><a href="{{url('/')}}" style="font-family: fontttf;">HOME</a></li>
            </ul>
        </div>
    </div>
</div>


<!--about_me_centent-->


<div class="about-centent">

    <div class="about-img">
        <img src="img/img_about.png" class="animated pulse"  alt="关于我的-技能">
    </div>
    <div class="about-centent-font animated fadeInRight ">
        <h2 >惠旋</h2>
        <h3>UI设计师</h3>
        <p>吉他爱好者、资深电影看客、游戏发烧友、18级业余围棋、动漫</p>
        <p>陕西西安，95年，2年工作经验，目前在陕西万企软件有限公司从事UI设计师，主要负责公司外包项目的UI视觉设计部分，包括APP端界面设计、web界面设计、交互原型图等。</p>
        <span class="about-line"></span>
        <p>2018年与朋友成立了独角兽工作室，担任视觉设计。<br/>
            工作室包括前端工程师、PHP工程师、JAVA工程师、UI设计师，主要提供品牌官网 / 手机网站 / 商场平台 / 营销型网站/ H5多屏响应式 / 微信小程序/网站的二次开发维护等</p>
        <span class="about-line"></span>
        <p>如果你对我们感兴趣，请马上联系我们获取免费咨询报价服务。</p>
    </div>



</div>







<div class="footer" style="margin-top: 0;">
    <div class="footer-back">
        <!--分割线-->
        <div class="line">
        </div>
        <!--左边内容区-->
        <div class="footer-nav-content1">
            <h4 class="footer-font1">视觉设计&amp;网站开发</h4>
            <p class="footer-font2">品牌官网 / 手机网站 / 商场平台 / 营销型网站
                / H5多屏响应式 / 微信 小程序开发</p>
            <p class="footer-font3 font-www">联系网址<br/><a href="#" class="footer-font1">www.Unicornstudio.com </a> </p>
        </div>
        <div class="footer-nav-content2">
            <h4 class="footer-font1">联系方式</h4>
            <p class="footer-font2"><span>Email</span> <br><a class="footer-font1">{{config('config_email')}}</a> </p>
            <p class="footer-font3"><span>QQ</span><br/><a class="footer-font1"
                                                           href="http://wpa.qq.com/msgrd?v=3&uin=552343468&site=qq&menu=yes" style="color: #999">{{config('qq')}}</a></p>
        </div>


        <!--右边内容区-->
        <div class="weixin">
            <img src="img/img_weixin.png" class="img-weixin" >
            <p class="copyright">{!! config('copyright') !!}</p>

        </div>
    </div>
</div>

</body>
</html>
