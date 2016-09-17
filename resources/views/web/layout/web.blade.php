<!DOCTYPE html>
<!--[if IE 8]> <html lang="zh-cn" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="zh-cn" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="zh-cn"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <title>Iadmin</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="Keywords" content="">
    <meta content="" name="description" />
    <meta content="itas" name="author" />

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="/front/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="/front/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->


    <!-- BEGIN THEME STYLES -->

    <link href="/front/assets/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="/front/assets/css/themes/blue.css" rel="stylesheet" type="text/css" id="style_color"/>
    <link href="/front/assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
    <link href="/front/assets/css/custom.css" rel="stylesheet" type="text/css"/>
    <!-- END THEME STYLES -->
    @yield('css')
    <link rel="shortcut icon" href="favicon.ico" />

</head>
<body>
<!-- BEGIN HEADER -->
<div class="header navbar navbar-default navbar-static-top">

    <div class="container">
        <div class="navbar-header">
            <!-- BEGIN RESPONSIVE MENU TOGGLER -->
            <button class="navbar-toggle btn navbar-btn" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- END RESPONSIVE MENU TOGGLER -->
            <!-- BEGIN LOGO (you can use logo image instead of text)-->
            <a class="navbar-brand logo-v1" href="/">
                <img src="/front/assets/img/logo.png" id="logoimg" alt="" >
            </a>
            <!-- END LOGO -->
        </div>

        <!-- BEGIN TOP NAVIGATION MENU -->
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown active">
                    <a class="dropdown-toggle" href="/">首页 </a>

                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" href="{{url('blog/')}}">博客  </a>

                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle"  href="{{url('image/')}}">效果图</a>

                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle"  href="#">小游戏</a>

                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle"  href="#">帮助文档 </a>

                </li>

                <li class="menu-search">
                    <span class="sep"></span>
                    <i class="fa fa-search search-btn"></i>

                    <div class="search-box">
                        <form action="#">
                            <div class="input-group input-large">
                                <input class="form-control" type="text" placeholder="Search">
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn theme-btn">Go</button>
                                    </span>
                            </div>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
        <!-- BEGIN TOP NAVIGATION MENU -->
    </div>
</div>
<!-- END HEADER -->

@yield('content')

<!-- BEGIN FOOTER -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 space-mobile">
                <!-- BEGIN ABOUT -->
                <h2>关于</h2>
                <p class="margin-bottom-30">Lmyadmin是一个免费开源的后台管理系统，使用html5响应式设计，兼容多客户端友好使用.</p>
                <div class="clearfix"></div>
                <!-- END ABOUT -->

                <h2 class="margin-bottom-20">网站logo</h2>
                <!-- BEGIN BLOG PHOTOS STREAM -->
                <div>

                    <img src="/front/assets/img/logo.png" alt="">
                </div>
                <!-- END BLOG PHOTOS STREAM -->
            </div>
            <div class="col-md-4 col-sm-4 space-mobile">
                <!-- BEGIN CONTACTS -->
                <h2>我系我们</h2>
                <address class="margin-bottom-40">
                    QQ:652008158<br>
                    Email: <a href="mailto:luoyangpeng1122@163.com">luoyangpeng1122@163.com</a>
                </address>
                <!-- END CONTACTS -->

            </div>
            <div class="col-md-4 col-sm-4">
                <!-- BEGIN TWITTER BLOCK -->
                <h2>关注我们</h2>
                <dl class="dl-horizontal f-twitter">
                    <dt><i class="fa fa-twitter"></i></dt>
                    <dd>
                        <a href="#">新浪微博</a>

                    </dd>
                </dl>


                <!-- END TWITTER BLOCK -->
            </div>

        </div>
    </div>
</div>
<!-- END FOOTER -->

<!-- BEGIN COPYRIGHT -->
<div class="copyright">

    <div class="container">

        <div class="row">

            <div class="col-md-8 col-sm-8">
                <p>
                    <span class="margin-right-10">2016 © iyoulnag. 版权所有.</span>

                </p>
            </div>

        </div>
    </div>
</div>
<!-- END COPYRIGHT -->


<!-- Load javascripts at bottom, this will reduce page load time -->
<!-- BEGIN CORE PLUGINS(REQUIRED FOR ALL PAGES) -->
<!--[if lt IE 9]>
<script src="/front/assets/plugins/respond.min.js"></script>
<![endif]-->
<script src="/front/assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>

<script src="/front/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

<script type="text/javascript" src="/front/assets/plugins/back-to-top.js"></script>
<!-- END CORE PLUGINS -->
@yield('js')
</body>

</html>
