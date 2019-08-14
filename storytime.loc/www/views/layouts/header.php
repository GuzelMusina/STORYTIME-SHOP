<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Главная</title>
    <link href="/template/css/bootstrap.min.css" rel="stylesheet">
    <link href="/template/css/font-awesome.min.css" rel="stylesheet">
    <link href="/template/css/prettyPhoto.css" rel="stylesheet">
    <link href="/template/css/price-range.css" rel="stylesheet">
    <link href="/template/css/animate.css" rel="stylesheet">
    <link href="/template/css/main.css" rel="stylesheet">
    <link href="/template/css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="/template/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="/template/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
          href="/template/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
          href="/template/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/template/images/ico/apple-touch-icon-57-precomposed.png">

    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="/template/css/bootstrap.min.css">
    <!-- Owl Carousel main css -->
    <link rel="stylesheet" href="/template/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/template/ss/owl.theme.default.min.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="/template/css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="/template/css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="/template/css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="/template/css/custom.css">


    <!-- Modernizr JS -->
    <script src="/template/js/vendor/modernizr-2.8.3.min.js"></script>
</head><!--/head-->

<body>

<div class="page-wrapper">
    <!-- Body main wrapper start -->
    <div class="wrapper fixed__footer">
        <!-- Start Header Style -->
        <header id="header" class="htc-header header--3 bg__white">
            <!-- Start Mainmenu Area -->
            <div id="sticky-header-with-topbar" class="mainmenu__area sticky__header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-lg-2 col-sm-3 col-xs-3">
                            <div class="logo">
                                <a href="/">
                                    <h1 style="font-weight: bolder">H2SO4</h1>
                                </a>
                            </div>
                        </div>
                        <!-- Start MAinmenu Ares -->
                        <div class="col-md-8 col-lg-8 col-sm-6 col-xs-6">
                            <nav class="mainmenu__nav hidden-xs hidden-sm">
                                <ul class="main__menu">
                                    <li class="drop"><a href="/">Main</a>
                                    </li>
                                    <li class="drop"><a href="/catalog/">Shop</a>
                                        <ul class="dropdown">
                                            <li><a href="/catalog/">Catalog</a></li>
                                            <li><a href="/cart/">Cart</a></li>
                                        </ul>
                                    </li>
                                    <li class="drop"><a href="/about/">About shop</a>
                                    </li>
                                    <li class="drop"><a href="/contacts/">Contacts</a>
                                    </li>
                                    <li></li>
                                    <li><a href="/cart">
                                            <i class="ti-shopping-cart"></i> Cart
                                            (<span id="cart-count"><?php echo Cart::countItems(); ?></span>)
                                        </a>
                                    </li>
                                    <?php if (User::isGuest()): ?>
                                        <li><a href="/user/login/"><i class="ti ti-lock"></i> Enter</a>
                                        </li>
                                    <?php else: ?>
                                        <li><a href="/cabinet/"><i class="ti-user"></i> Account</a></li>
                                        <li><a href="/user/logout/"><i class="ti ti-unlock"></i>
                                                Exit</a></li>
                                    <?php endif; ?>
                                </ul>
                        </div>
                    </div>

                </div>
            </div>
        </header>
    </div>
    <!-- End Mainmenu Area -->
