<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <title>YouSaveIt - Home</title>
        <meta name="description" content="Multipurpose Responsive Site Theme">
        <meta name="author" content="pixel-industry">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">
        <meta name="viewport" content="width=device-width">
        <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>

        <!-- favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
        <link rel="icon" type="image/x-icon" href="favicon.ico" /

        <!-- stylesheets -->
        <link rel="stylesheet" href="css/basic.css" />
        <!--<link rel="stylesheet" href="css/style.css" />-->
        <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="all" /> -->
        <link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
        <link rel="stylesheet" href="css/nivo-slider.css" media="all"/>
        <link rel="stylesheet" href="css/prettyPhoto.css" media="all"/>
        <link rel="stylesheet" type="text/css" href="css/fg_membersite.css" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="all" />
        <link rel="stylesheet" type="text/css" href="templates/css/font-awesome.min.css" media="all" />

        <!--[if IE 8]>
            <link rel="stylesheet" href="css/ie8.css" media="screen" />
        <![endif]-->

        <!-- google web fonts -->
        <link href='http://fonts.googleapis.com/css?family=Arimo' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>

        <!-- js files -->
        <script  src="js/jquery-1.7.2.js"></script> <!-- jQuery 1.7.2 -->
        <script  src="js/jquery.placeholder.min.js"></script><!-- jQuery placeholder fix for old browsers -->
        <script  src="js/jquery.nivo.slider.js"></script><!-- nivo slider -->
        <script  src="js/portfolio.js"></script> <!-- portfolio custom options -->
        <script  src="js/jquery.prettyPhoto.js"></script><!-- prettyPhoto -->
        <script  src="js/jquery.tweetscroll.js"></script> <!-- jQuery tweetscroll plugin -->
        <script  src="js/socialstream.jquery.js"></script> <!-- Social Networks Feeds -->
        <script  src="js/jquery.carouFredSel-6.0.0-packed.js"></script><!-- CarouFredSel carousel plugin -->
        <script  src="js/bootstrap.js"></script><!-- CarouFredSel carousel plugin -->
        <script  src="js/include.js"></script> <!-- jQuery custom options -->
        <script  src="templates/js/ckeditor/ckeditor.js"></script>
        
        <!--[if (gte IE 6)&(lte IE 8)]>
            <script type="text/javascript" src="js/selectivizr.js"></script>
        <![endif]-->
        <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->
    </head>

    <body>
        <!-- header start -->
        <header id="header" class="clearfix">

            <!-- logo start -->
            <section id="logo">
                <a href="index.php">
                    <img src="img/logo.png" alt="logo"/>
                </a>
            </section><!-- #logo end -->

            <!-- nav container start -->
            <section id="nav-container">

                <!-- main navigation start  -->
                <nav id="nav">
                    <ul class="nav nav-list">
                        <li>
                            <a href="index.php">
                                <i class="icon-nav icon-home"></i>
                                Home
                            </a>

                        </li>
                    
            
                        <li>
                            <a href="#">
                                <i class="icon-nav icon-list"></i>
                                Contact +</a>
                            <ul>
                                <li><a href="contact.html">Contact default</a></li>
                            </ul>
                        </li>
                        <?php if (user_is_logged()): ?>
                          <li>
                            <a href="user.php?action=user-cp">
                              <i class="icon-nav icon-user"></i> User CP
                            </a>
                          </li>
                          <li>
                            <a href="user.php?action=logout">
                              <i class="icon-nav icon-signout"></i> Logout
                            </a>
                          </li>
                        <?php else: ?>
                          <li>
                            <a href="user.php?action=login">
                                <i class="icon-nav icon-user"></i>
                                Login</a>
                          </li>
                          <li>
                            <a href="user.php?action=register">
                                <i class="icon-nav icon-plus-sign"></i>
                                Register</a>
                          </li>
                        <?php endif ?>
                    </ul> 
                </nav><!-- main navigation end -->

                <!-- responsive navigation start -->
                <select id="nav-responsive">
                    <option selected="" value="">Site Navigation...</option>

                    <option value="">Home</option>
                    <option value="index.html">- Home default</option>



                    <option value="">Contact</option>
                    <option value="contact.html">- Contact default</option>

                    <option value="">Login/Register</option>
                    <option value="login.html">- Columns</option>
                    
                </select> <!-- responsive navigation end -->

            </section><!-- nav container end -->

            <!-- search start -->
            <section id="search">
                <form action="#" method="get">
                    <input id="search-submit" type="submit" />
                    <input id="search-bkg" type="text" placeholder="Type and press enter.." />                   
                </form>
            </section><!-- search end -->

        </header><!-- header end -->
        
                <!-- slider start -->
        <div class="slider-wrapper">

            <div class="shadow-top"></div>


            <div id="slider" class="nivoSlider home-slider">
                <img src="img/slider/slider1.jpg" alt="slider" 
                     title="#htmlcaption1"/>

                <img src="img/slider/slider2.jpg" alt="slider" 
                     title="#htmlcaption2"/>

                <img src="img/slider/slider3.jpg" alt="slider" 
                     title="#htmlcaption3"/>
            </div>

            <!-- image captions start -->
            <div id="htmlcaption1">
                <p class="nivo-caption-title">
                    This is a perfect place for some cool image title.
                </p>

                <div class="nivo-caption-subtitle">
                    With it's clean design and uniqlly designed pages, you'll be 
                    able to find the perfect combination that suits your needs.
                </div>
            </div><!-- image captions end -->

            <!-- Second image captions start -->
            <div id="htmlcaption2">
                <p class="nivo-caption-title">
                    Perfect place for showcasing your best work.
                </p>

                <div class="nivo-caption-subtitle">
                    Sed ut perspiciatis unde omnis iste natus error sit 
                    voluptatem accusantium doloremque laudantium, totam rem.
                </div>
            </div><!-- image captions end -->

            <!-- Thirs image captions start -->
            <div id="htmlcaption3">
                <p class="nivo-caption-title">
                    Clean and simple design that will sure suit your needs.
                </p>

                <div class="nivo-caption-subtitle">
                    Sed ut perspiciatis unde omnis iste natus error sit 
                    voluptatem accusantium doloremque laudantium, totam rem.
                </div>
            </div><!-- image captions end -->

            <!-- slider images shadow -->
            <div class="slider-shadow"></div>

            <div class="shadow-bottom"></div>
        </div>

        <!-- page-title start-->
        <section class="page-title-container">

            <!-- top shadow on container -->
            <div class="shadow-top"></div>

            <section class="page-title">
                <div class="title">
                    <h1>Products</h1>
                    <p>Amazing products that we offer</p>
                </div>

                <ul class="breadcrumbs">
                    <li>
                        You are here:
                    </li>
                    <li>
                        <a href="#">Pages  / </a>
                    </li>
                    <li class="active">
                        <a href="products.html">Products</a>
                    </li>
                </ul>                        
            </section>

            <div class="shadow-bottom"></div>
        </section>