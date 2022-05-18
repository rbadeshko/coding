<?php 
// FOR PRE CODING
include 'common/_settings.php';
//echo $site_menu;
$CODING_NO_CACHE = 0; // if 1 no css/js in cache
?> 
<html class="no-js" lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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