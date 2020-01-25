<!DOCTYPE html>
<html lang="en">
<head>
    <title>tooEasy shop</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="/assets/images/favicon.png"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/chosen.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/magnific-popup.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/lightbox.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/js/fancybox/source/jquery.fancybox.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/jquery.scrollbar.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/mobile-menu.css">
    <link rel="stylesheet" type="text/css" href="/assets/fonts/flaticon/flaticon.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
</head>
<body class="home">
<header class="header style7">
    <div class="top-bar">
        <div class="container">
            <div class="top-bar-left">
                <div class="header-message">
                    Welcome to our online store!
                </div>
            </div>
            <div class="top-bar-right">
                <ul class="header-user-links">
                    <li>
                        <a href="/"><?php echo $_SESSION['email']?> | </a>
                        <a href="/logout">Log out</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="main-header">
            <div class="row">
                <div class="col-lg-3 col-sm-4 col-md-3 col-xs-7 col-ts-12 header-element">
                    <div class="logo">
                        <a href="/">
                            <img src="assets/images/logo.png" alt="img">
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 col-sm-8 col-md-6 col-xs-5 col-ts-12">
                    <div class="block-search-block">
                        <form class="form-search form-search-width-category">
                            <div class="form-content">
                                <div class="category">
                                    <select title="cate" data-placeholder="All Categories" class="chosen-select"
                                            tabindex="1">
                                        <option value="United States">Accessories</option>
                                        <option value="United Kingdom">Trousers</option>
                                        <option value="Afghanistan">Tables</option>
                                        <option value="Aland Islands">Sofas</option>
                                        <option value="Albania">New Arrivals</option>
                                        <option value="Algeria">Storage</option>
                                    </select>
                                </div>
                                <div class="inner">
                                    <input type="text" class="input" name="s" value="" placeholder="Search here">
                                </div>
                                <button class="btn-search" type="submit">
                                    <span class="icon-search"></span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-12 col-md-3 col-xs-12 col-ts-12">
                    <div class="header-control">
                        <div class="block-minicart nozari-mini-cart block-header nozari-dropdown">
                            <a href="javascript:void(0);" class="shopcart-icon" data-nozari="nozari-dropdown">
                                Cart
                                <span class="count">
                                    0
                                    </span>
                            </a>
                            <a href="/">
                                Hey, <?php echo "username"?>
                            </a>
                            <div class="shopcart-description nozari-submenu">
                                <div class="content-wrap">
                                    <h3 class="title">Shopping Cart</h3>
                                    <ul class="minicart-items">
                                        <?php
                                            foreach($all as $product):
                                        ?>
                                        <li class="product-cart mini_cart_item">
                                            <a href="#" class="product-media">
                                                <img src="/images/<?= $product->main_image ?>" alt="img">
                                            </a>
                                            <div class="product-details">
                                                <h5 class="product-name">
                                                    <a href="#"><?= $product->title ?></a>
                                                </h5>
                                                <div class="variations">
                                                        <span class="attribute_color">
                                                            <a href="#">Black</a>
                                                        </span>
                                                    ,
                                                    <span class="attribute_size">
                                                            <a href="#">300ml</a>
                                                        </span>
                                                </div>
                                                <span class="product-price">
                                                        <span class="price">
                                                            <span><?= $product->sale_price ?></span>
                                                        </span>
                                                    </span>
                                                <span class="product-quantity">
                                                        (x1)
                                                    </span>
                                                <div class="product-remove">
                                                    <a href=""><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                        <?php endforeach; ?>
                                    </ul>
                                    <div class="subtotal">
                                        <span class="total-title">Subtotal: </span>
                                        <span class="total-price">
                                                <span class="Price-amount">
                                                    $135
                                                </span>
                                            </span>
                                    </div>
                                    <div class="actions">
                                        <a class="button button-viewcart" href="shoppingcart.html">
                                            <span>View Bag</span>
                                        </a>
                                        <a href="checkout.html" class="button button-checkout">
                                            <span>Checkout</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="header-account nozari-submenu">
                                <div class="header-user-form-tabs">
                                    <ul class="tab-link">
                                        <li class="active">
                                            <a data-toggle="tab" aria-expanded="true" href="#header-tab-login">Login</a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" aria-expanded="true" href="#header-tab-rigister">Register</a>
                                        </li>
                                    </ul>
                                    <div class="tab-container">
                                        <div id="header-tab-login" class="tab-panel active">
                                            <form method="post" class="login form-login">
                                                <p class="form-row form-row-wide">
                                                    <input type="email" placeholder="Email" class="input-text">
                                                </p>
                                                <p class="form-row form-row-wide">
                                                    <input type="password" class="input-text" placeholder="Password">
                                                </p>
                                                <p class="form-row">
                                                    <label class="form-checkbox">
                                                        <input type="checkbox" class="input-checkbox">
                                                        <span>
                                                                Remember me
                                                            </span>
                                                    </label>
                                                    <input type="submit" class="button" value="Login">
                                                </p>
                                                <p class="lost_password">
                                                    <a href="#">Lost your password?</a>
                                                </p>
                                            </form>
                                        </div>
                                        <div id="header-tab-rigister" class="tab-panel">
                                            <form method="post" class="register form-register">
                                                <p class="form-row form-row-wide">
                                                    <input type="email" placeholder="Email" class="input-text">
                                                </p>
                                                <p class="form-row form-row-wide">
                                                    <input type="password" class="input-text" placeholder="Password">
                                                </p>
                                                <p class="form-row">
                                                    <input type="submit" class="button" value="Register">
                                                </p>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <a class="menu-bar mobile-navigation menu-toggle" href="#">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-nav-container rows-space-20">
        <div class="container">
            <div class="header-nav-wapper main-menu-wapper">
                <div class="vertical-wapper block-nav-categori">
                    <div class="block-title">
                        <span class="icon-bar">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                        <span class="text">All Categories</span>
                    </div>
                    <div class="block-content verticalmenu-content">
                        <ul class="nozari-nav-vertical vertical-menu nozari-clone-mobile-menu">
                            <li class="menu-item">
                                <a href="#" class="nozari-menu-item-title" title="New Arrivals">New Arrivals</a>
                            </li>
                            <li class="menu-item">
                                <a title="Hot Sale" href="#" class="nozari-menu-item-title">Hot Sale</a>
                            </li>
                            <li class="menu-item menu-item-has-children">
                                <a title="Accessories" href="#" class="nozari-menu-item-title">Accessories</a>
                                <span class="toggle-submenu"></span>
                                <ul role="menu" class=" submenu">
                                    <li class="menu-item">
                                        <a title="Watches" href="#" class="nozari-item-title">Watches</a>
                                    </li>
                                    <li class="menu-item">
                                        <a title="Trousers" href="#" class="nozari-item-title">Trousers</a>
                                    </li>
                                    <li class="menu-item">
                                        <a title="New Arrivals" href="#" class="nozari-item-title">New Arrivals</a>
                                    </li>
                                    <li class="menu-item">
                                        <a title="Accessories" href="#" class="nozari-item-title">Accessories</a>
                                    </li>
                                    <li class="menu-item">
                                        <a title="Storage" href="#" class="nozari-item-title">Storage</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a title="Trousers" href="#" class="nozari-menu-item-title">Trousers</a>
                            </li>
                            <li class="menu-item">
                                <a title="Bags" href="#" class="nozari-menu-item-title">Bags</a>
                            </li>
                            <li class="menu-item">
                                <a title="Shoes" href="#" class="nozari-menu-item-title">Shoes</a>
                            </li>
                            <li class="menu-item">
                                <a title="Women" href="#" class="nozari-menu-item-title">Women</a>
                            </li>
                            <li class="menu-item">
                                <a title="Men" href="#" class="nozari-menu-item-title">Men</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="header-nav">
                    <div class="container-wapper">
                        <ul class="nozari-clone-mobile-menu nozari-nav main-menu " id="menu-main-menu">
                            <li class="menu-item  menu-item-has-children">
                                <a href="index.html" class="nozari-menu-item-title" title="Home">Home</a>
                                <span class="toggle-submenu"></span>
                                <ul class="submenu">
                                    <li class="menu-item">
                                        <a href="index.html">Home 01</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="home2.html">Home 02</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="home3.html">Home 03</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-has-children">
                                <a href="gridproducts.html" class="nozari-menu-item-title" title="Shop">Shop</a>
                                <span class="toggle-submenu"></span>
                                <ul class="submenu">
                                    <li class="menu-item">
                                        <a href="gridproducts.html">Grid Fullwidth</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="gridproducts_leftsidebar.html">Grid Left sidebar</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="gridproducts_bannerslider.html">Grid Bannerslider</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="listproducts.html">List</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item  menu-item-has-children item-megamenu">
                                <a href="#" class="nozari-menu-item-title" title="Pages">Pages</a>
                                <span class="toggle-submenu"></span>
                                <div class="submenu mega-menu menu-page">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 menu-page-item">
                                            <div class="nozari-custommenu default">
                                                <h2 class="widgettitle">Shop Pages</h2>
                                                <ul class="menu">
                                                    <li class="menu-item">
                                                        <a href="shoppingcart.html">Shopping Cart</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="checkout.html">Checkout</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="contact.html">Contact us</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="404page.html">404</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="login.html">Login/Register</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 menu-page-item">
                                            <div class="nozari-custommenu default">
                                                <h2 class="widgettitle">Product</h2>
                                                <ul class="menu">
                                                    <li class="menu-item">
                                                        <a href="productdetails-fullwidth.html">Product Fullwidth</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="productdetails-leftsidebar.html">Product left
                                                            sidebar</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="productdetails-rightsidebar.html">Product right
                                                            sidebar</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 menu-page-item">
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 menu-page-item">
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="menu-item  menu-item-has-children">
                                <a href="inblog_right-siderbar.html" class="nozari-menu-item-title"
                                   title="Blogs">Blogs</a>
                                <span class="toggle-submenu"></span>
                                <ul class="submenu">
                                    <li class="menu-item menu-item-has-children">
                                        <a href="#" class="nozari-menu-item-title" title="Blog Style">Blog Style</a>
                                        <span class="toggle-submenu"></span>
                                        <ul class="submenu">
                                            <li class="menu-item">
                                                <a href="bloggrid.html">Grid</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="bloglist.html">List</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="bloglist-leftsidebar.html">List Sidebar</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="#" class="nozari-menu-item-title" title="Post Layout">Post Layout</a>
                                        <span class="toggle-submenu"></span>
                                        <ul class="submenu">
                                            <li class="menu-item">
                                                <a href="inblog_left-siderbar.html">Left Sidebar</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="inblog_right-siderbar.html">Right Sidebar</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="about.html" class="nozari-menu-item-title" title="About">About</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>