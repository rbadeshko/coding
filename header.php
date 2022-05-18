<?php 
// FOR PRE CODING
include 'common/_settings.php';
//echo $site_menu;
$CODING_NO_CACHE = 0; // if 1 no css/js in cache
?> 
<html class="" lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Critical Path CSS for first view-->
        <style>
            :root{--main-animation:all 0.25s ease-in-out;--color-dark-grey:#3a3a3a;--color-grey:#5f5f5f;--color-grey-l:#e9e9e9;--color-grey-wl:#f2f2f2;--color-black-semi:#151515}h1{font-size:3.75rem;text-transform:uppercase}h2{font-size:2rem;text-transform:uppercase}input,textarea{background-color:inherit;padding:.5rem;border-radius:2px;border:1px solid var(--color-grey-l);background-color:var(--color-grey-wl);color:var(--color-grey)}textarea{min-height:6rem}body{color:var(--color-grey)}.header-top__conatiner{padding:2rem 2.5rem;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-direction:row;flex-direction:row;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between}.burger{display:none;visibility:hidden}.burger span:first-child{top:0;left:0}.burger span{width:100%;height:1px;background:#fff;position:absolute;left:0;top:50%;transform:translate(0,-50%);transition:.3s;-webkit-transform:translate(0,-50%);-moz-transform:translate(0,-50%);-ms-transform:translate(0,-50%);-o-transform:translate(0,-50%);-webkit-transition:.3s;-moz-transition:.3s;-ms-transition:.3s;-o-transition:.3s}.burger span:last-child{top:100%;left:0;-webkit-transform:translateY(-100%);transform:translateY(-100%)}.burger._active span{opacity:0;background:var(--color-dark-grey)}.burger._active span:nth-child(1){opacity:1;top:50%;-webkit-transform:rotate(45deg);transform:rotate(45deg)}.burger._active span:nth-child(3){opacity:1;top:50%;-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}html._fixed{overflow:hidden}body._fixed{overflow:hidden}.logo__img{width:195px;height:auto}.main-header{min-height:500px;position:relative}.desc-bg__wrap,.main-bg__wrap{position:absolute;top:0;left:0;width:100%;height:100%;z-index:-1;background-color:#000}.main-header__img{width:100%;height:100%;-o-object-fit:cover;object-fit:cover;-o-object-position:top;object-position:top;opacity:.7}.header__menu{width:100%}.header__menu-list{height:100%;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-direction:row;flex-direction:row;-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start;-webkit-box-align:center;-ms-flex-align:center;align-items:center;margin-left:2rem}.menu__item{margin-right:2.25rem}.menu__link{color:#fff!important;text-transform:uppercase;font-weight:700;position:relative}.menu__link::after{content:"";position:absolute;bottom:-.5rem;left:0;width:0;height:2px;background:#fff;-webkit-transition:var(--main-animation);transition:var(--main-animation)}.menu__item:hover>.menu__link::after{width:100%}.menu__item:last-child{margin-right:0}.header__right{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-direction:row;flex-direction:row;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.header__acount,.header__cart,.header__search{position:relative;padding:0 1rem;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center}.header__acount svg,.header__cart svg,.header__search svg{width:auto;height:1.5rem;fill:#ffffff}.header__cart::after,.header__search::after{content:"";position:absolute;top:0;right:0;width:1px;height:75%;background:#fff}.header__right_item-link{-webkit-transition:var(--main-animation);transition:var(--main-animation)}.header__right_item-link:hover{opacity:.75}.header__page-info{padding:10rem 2.5rem 10rem 16.6875rem}.header__title{color:#fff;margin-bottom:4.6rem}.header__page-desc{max-width:990px}.page-desc{color:#fff;font-weight:400;line-height:175%}.section__cats{max-width:100%;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-direction:row;flex-direction:row;-ms-flex-wrap:wrap;flex-wrap:wrap;-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start;padding:2.4rem 0}.cat_item{max-width:25%;width:100%;margin-top:4.35rem}.cat-img__wrap{height:14rem;overflow:hidden}.cat-img{-o-object-fit:cover;object-fit:cover;-o-object-position:top;object-position:top;width:100%;height:auto;opacity:0;transition:.35s}.cat-img:hover{transform:scale(1.2)}.cat-img._loaded{opacity:1}.cat-title{padding:1.5rem 0;font-size:1.45rem;font-weight:400;text-transform:uppercase;color:#5f5f5f}.cat-desc{color:#5f5f5f;font-weight:300;line-height:150%;letter-spacing:1px}.cat-desc,.cat-title{padding-left:1.5rem}.cat_item-logo{padding-left:3.375rem}.logo-icon__img{height:136px;opacity:.75}.logo-desc{margin-top:3.875rem}.prod-string__big,.prod-string__small{text-transform:uppercase;color:var(--color-grey)}.prod-string__small{font-size:1.675rem;font-weight:300}.prod-string__big{font-size:3.25rem;font-weight:400}
        </style>
        <!-- Critical Path CSS -->
        <link rel="stylesheet" href="css/html-reset.css" type="text/css" />
        <link rel="stylesheet" href="css/style.css<?php if($CODING_NO_CACHE){echo "&ver=" . rand(0, 15000000000000000);}?>" type="text/css" />
        <link rel="stylesheet" href="css/style_adapt.css<?php if($CODING_NO_CACHE){echo "&ver=" . rand(0, 15000000000000000);}?>" type="text/css" />
        <!-- FONTS MUST BE DOWNLOADED AND USED BY SERVERSIDE, NOT FROM GOOGLE -->
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;200;300;400;700&display=swap" rel="stylesheet">

    </head>
    <body>
        <header class="main-header">
            <!-- part of bg images for every page. Must be checked serverside-->
            <div class="main-bg__wrap">
                <img class="main-header__img"src="<?php echo $_default_image; ?>" alt="">
            </div>
            <!-- end of part of bg images for every page. Must be checked serverside-->
            <div class="header-top__conatiner">
                <div class="logo header__logo">
                    <img class="logo__img" src="images/logo.png" alt="Logo">
                </div>
                <nav class="header__menu">
                    <ul class="header__menu-list">
                        <?php 
                            foreach($site_menu as $key=> $value){ ?>
                                <li class="menu__item">
                                    <a href="<?php echo $key; ?>" class="menu__link"><?php echo $value; ?></a>
                                </li>
                        <?php  } ?>
                    
                    </ul>
                </nav>
                <div class="header__right">
                    <div class="search header__search">
                        <a class="header__right_item-link" href="#">
                            <?php echo $_iconSearch; ?>
                        </a>
                    </div>
                    <div class="cart header__cart">
                        <a class="header__right_item-link" href="#">
                            <?php echo $_iconCart; ?>
                        </a>
                    </div>
                    <div class="account header__acount">
                        <a class="header__right_item-link" href="#" >
                            <?php echo $_svg_user; ?>
                        </a>
                    </div>
                </div>
                <div class="burger">
					<span></span>
					<span></span>
					<span></span>
				</div>
            </div>
             <!-- part of CATCH SLOGAN H1 and small description CALL TO ACTION for every page -->
            <div class="header__page-info">
                <h1 class="header__title"><?php echo $top_image_section->title ?></h1>
                <div class="header__page-desc">
                    <p class="page-desc"><?php echo $top_image_section->content; ?></p>
                </div>
            </div>
            <!-- part of CATCH SLOGAN H1 and small description CALL TO ACTION for every page -->
        </header>