<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ISHOP</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="/img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="/css/font-awesome.min.css">
	<!-- nalika Icon CSS
		============================================ -->
    <link rel="stylesheet" href="/css/nalika-icon.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="/css/owl.carousel.css">
    <link rel="stylesheet" href="/css/owl.theme.css">
    <link rel="stylesheet" href="/css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="/css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="/css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="/css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="/css/metisMenu/metisMenu-vertical.css">
 <!-- Preloader CSS
		============================================ -->
        <link rel="stylesheet" href="/css/preloader/preloader-style.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="/css/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
  <div class="left-sidebar-pro">
      <nav id="sidebar" class="">
          <div class="sidebar-header">
              <a href="index.html"><img class="main-logo" src="/img/logo/logo2.JPG" alt="" style="height:60px"></a>
              <strong><img src="/img/logo/logosn.png" alt="" /></strong>
          </div>
      <div class="nalika-profile">
        <div class="profile-dtl">
          <a href="#"><img src="/img/avatar/default.jfif" alt="" style="height:90px;width:90px;"/></a>
          <h2><?= $this->getRequest()->getSession()->read('User.name');?></h2>
        </div>
        <div class="profile-social-dtl">
          <ul class="dtl-social">
            <li><a href="#"><i class="icon nalika-facebook"></i></a></li>
            <li><a href="#"><i class="icon nalika-twitter"></i></a></li>
            <li><a href="#"><i class="icon nalika-linkedin"></i></a></li>
          </ul>
        </div>
          </div>
          <div class="left-custom-menu-adp-wrap comment-scrollbar">
              <nav class="sidebar-nav left-sidebar-menu-pro">
                  <ul class="metismenu" id="menu1">
                      <li class="active"><a class="has-arrow" href="/dashboards/index"><i class="icon nalika-home icon-wrap"></i><span class="mini-click-non">Home Page</span></a></li>
                      <li> <a class="has-arrow" href="/dashboards/product" aria-expanded="false"><i class="icon nalika-diamond icon-wrap"></i> <span class="mini-click-non">Product</span></a> </li> 
                      <li><a class="has-arrow" href="history.html" aria-expanded="false"><i class="icon nalika-forms icon-wrap" style="color:#fff; width: 20px; height:auto;"></i> <span class="mini-click-non">Order</span></a></li>     
                      <li><a class="has-arrow" href="/dashboards/store" aria-expanded="false"><i class="icon nalika-table icon-wrap" style="color:#fff; width: 20px; height:auto;"></i> <span class="mini-click-non">My Store</span></a></li> 
                      <li><a class="has-arrow" href="about-us.html" aria-expanded="false"><i class="icon nalika-bar-chart icon-wrap"></i> <span class="mini-click-non">About us</span></a></li>
                  </ul>
              </nav>
          </div>
      </nav>
  </div>
  <div class="all-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="logo-pro">
                    <a href="index.html"><img class="main-logo" src="/img/logo/logo.png" alt="" /></a>
                </div>
            </div>
        </div>
    </div>

    <div class="header-advance-area">
   
    <div class="header-top-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="header-top-wraper">
                        <div class="row">
                            <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                            </div>
                            
                            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12" style="float: right;">
                                <div class="header-right-info">
                                    <ul class="nav navbar-nav mai-top-nav header-right-menu">  
                                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="icon nalika-alarm" aria-hidden="true"></i><span class="indicator-nt"></span></a>
                                            <div role="menu" class="notification-author dropdown-menu animated zoomIn">
                                                <div class="notification-single-top">
                                                    <h1>Notifications</h1>
                                                </div>
                                                <ul class="notification-menu">
                                                    <li>
                                                        <a href="#">
                                                            <div class="notification-icon">
                                                                <i class="icon nalika-tick" aria-hidden="true"></i>
                                                            </div>
                                                            <div class="notification-content">
                                                                <span class="notification-date">16 Sept</span>
                                                                <h2>Advanda Cro</h2>
                                                                <p>Please done this project as soon possible.</p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <div class="notification-icon">
                                                                <i class="icon nalika-cloud" aria-hidden="true"></i>
                                                            </div>
                                                            <div class="notification-content">
                                                                <span class="notification-date">16 Sept</span>
                                                                <h2>Sulaiman din</h2>
                                                                <p>Please done this project as soon possible.</p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <div class="notification-icon">
                                                                <i class="icon nalika-folder" aria-hidden="true"></i>
                                                            </div>
                                                            <div class="notification-content">
                                                                <span class="notification-date">16 Sept</span>
                                                                <h2>Victor Jara</h2>
                                                                <p>Please done this project as soon possible.</p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <div class="notification-icon">
                                                                <i class="icon nalika-bar-chart" aria-hidden="true"></i>
                                                            </div>
                                                            <div class="notification-content">
                                                                <span class="notification-date">16 Sept</span>
                                                                <h2>Victor Jara</h2>
                                                                <p>Please done this project as soon possible.</p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="notification-view">
                                                    <a href="#">View All Notification</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                    <i class="icon nalika-user"></i>
                                                    <span class="admin-name">Advance Settings</span>
                                            </a>
                                            <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                <li><a href="profile-edit.html"><span class="icon nalika-user author-log-ic"></span> My Profile</a></li>
                                                <li><a href="/users/logout"><span class="icon nalika-unlocked author-log-ic"></span> Log Out</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <?= $this->fetch('content'); ?>       <!-- content -->
   
    <!-- Preloader Start -->
    <div class="preloader-area mg-tb-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="preloader-single mg-t-30">
                        <div class="ts_preloading_box">
                            <div id="ts-preloader-absolute23">
                                <div class="tsperloader23" id="tsperloader23_one"></div>
                                <div class="tsperloader23" id="tsperloader23_two"></div>
                                <div class="tsperloader23" id="tsperloader23_three"></div>
                                <div class="tsperloader23" id="tsperloader23_four"></div>
                                <div class="tsperloader23" id="tsperloader23_five"></div>
                                <div class="tsperloader23" id="tsperloader23_six"></div>
                                <div class="tsperloader23" id="tsperloader23_seven"></div>
                                <div class="tsperloader23" id="tsperloader23_eight"></div>
                                <div class="tsperloader23" id="tsperloader23_big"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="preloader-single mg-t-30">
                        <div class="ts_preloading_box">
                            <div id="ts-preloader-absolute53">
                                <div id="tscssload-global">
                                    <div id="tscssload-top" class="tscssload-mask">
                                        <div class="tscssload-plane"></div>
                                    </div>
                                    <div id="tscssload-middle" class="tscssload-mask">
                                        <div class="tscssload-plane"></div>
                                    </div>
                                    <div id="tscssload-bottom" class="tscssload-mask">
                                        <div class="tscssload-plane"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="preloader-single mg-t-30">
                        <div class="ts_preloading_box">
                            <div id="ts-preloader-absolute52">
                                <div class="tscssload-triangles">
                                    <div class="tscssload-tri tscssload-invert"></div>
                                    <div class="tscssload-tri tscssload-invert"></div>
                                    <div class="tscssload-tri"></div>
                                    <div class="tscssload-tri tscssload-invert"></div>
                                    <div class="tscssload-tri tscssload-invert"></div>
                                    <div class="tscssload-tri"></div>
                                    <div class="tscssload-tri tscssload-invert"></div>
                                    <div class="tscssload-tri"></div>
                                    <div class="tscssload-tri tscssload-invert"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader End-->

    <div class="footer-copyright-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-copy-right">
                        <p>Copyright © 2020 All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
    <script src="/js/take_test.js"></script>
    <!-- jquery
		============================================ -->
    <script src="/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="/js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="/js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="/js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="/js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="/js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="/js/metisMenu/metisMenu.min.js"></script>
    <script src="/js/metisMenu/metisMenu-active.js"></script>
    <!-- /sparkline JS
		============================================ -->
    <script src="/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="/js/sparkline/jquery.charts-sparkline.js"></script>

	<!-- float JS
		============================================ -->
    <script src="/js/flot/jquery.flot.js"></script>
    <script src="/js/flot/jquery.flot.resize.js"></script>
    <script src="/js/flot/curvedLines.js"></script>
    <script src="/js/flot/flot-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="/js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="/js/main.js"></script>
</body>

</html>