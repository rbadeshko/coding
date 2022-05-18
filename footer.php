<footer class="footer">
            <div class="footer__wrap small__container">
                <?php if (isset($footer_1_menu)) { ?>
                <div class="footer__menu-block">
                    <nav class="footer__cat-menu">
                        <ul class="footer-menu__list">
                            <?php 
                                foreach($footer_1_menu as $key=> $value){   
                                    ?>
                                    <li class="footer-menu__item">
                                        <a href="<?php echo $key; ?>" class="footer-menu__link"><?php echo $value; ?></a>
                                    </li>
                            <?php  } ?>
                        
                        </ul>
                    </nav>
                </div>
                <?php } ?>
                <?php if (isset($footer_2_menu)) { ?>
                <div class="footer__menu-block">
                    <nav class="footer__cat-menu">
                        <ul class="footer-menu__list">
                            <?php 
                                foreach($footer_2_menu as $key=> $value){   
                                    ?>
                                    <li class="footer-menu__item">
                                        <a href="<?php echo $key; ?>" class="footer-menu__link"><?php echo $value; ?></a>
                                    </li>
                            <?php  } ?>
                        
                        </ul>
                    </nav>
                </div>
                <?php } ?>

                <?php if (isset($footer_3_menu)) { ?>
                <div class="footer__menu-block">
                    <nav class="footer__cat-menu">
                        <ul class="footer-menu__list">
                            <?php 
                                foreach($footer_3_menu as $key=> $value){   
                                    ?>
                                    <li class="footer-menu__item">
                                        <a href="<?php echo $key; ?>" class="footer-menu__link"><?php echo $value; ?></a>
                                    </li>
                            <?php  } ?>
                        
                        </ul>
                    </nav>
                </div>
                <?php } ?>

                <?php if (isset($footer_4_menu)) { ?>
                <div class="footer__menu-block">
                    <nav class="footer__cat-menu">
                        <ul class="footer-menu__list">
                            <?php 
                                foreach($footer_4_menu as $key=> $value){   
                                    ?>
                                    <li class="footer-menu__item">
                                        <a href="<?php echo $key; ?>" class="footer-menu__link"><?php echo $value; ?></a>
                                    </li>
                            <?php  } ?>
                        
                        </ul>
                    </nav>
                </div>
                <?php } ?>

                <?php if (isset($footer_5_menu)) { ?>
                <div class="footer__menu-block">
                    <nav class="footer__cat-menu">
                        <ul class="footer-menu__list">
                            <?php 
                                foreach($footer_6_menu as $key=> $value){   
                                    ?>
                                    <li class="footer-menu__item">
                                        <a href="<?php echo $key; ?>" class="footer-menu__link"><?php echo $value; ?></a>
                                    </li>
                            <?php  } ?>
                        
                        </ul>
                    </nav>
                </div>
                <?php } ?>

                <?php if (isset($footer_7_menu)) { ?>
                <div class="footer__menu-block">
                    <nav class="footer__cat-menu">
                        <ul class="footer-menu__list">
                            <?php 
                                foreach($footer_7_menu as $key=> $value){   
                                    ?>
                                    <li class="footer-menu__item">
                                        <a href="<?php echo $key; ?>" class="footer-menu__link"><?php echo $value; ?></a>
                                    </li>
                            <?php  } ?>
                        
                        </ul>
                    </nav>
                </div>
                <?php } ?>
            </div>
                
            <div class="footer__divider small__container">
                <div class="footer-line"></div>
                <div class="footer_logo">
                    <img class="footer-logo__img" src="images/logo.png" alt="Logo">
                </div>
                <div class="footer-line"></div>
            </div>
           
           
                <nav class="footer-nav-menu">
                    <ul class="footer-nav-menu__list">
                        <?php 
                            foreach($footer_nav_menu as $key=> $value){ ?>
                                <li class="menu__item">
                                    <a href="<?php echo $key; ?>" class="menu__link"><?php echo $value; ?></a>
                                </li>
                        <?php  } ?>
                    
                    </ul>
                </nav>
            <div class="copyright">
                <ul class="right-menu__list">
                        <li class="menu__item">Copyright <?php echo date("Y"); ?> iEstartegic</li>
                        <?php 
                            foreach($footer_disclaimer_menu as $key=> $value){ ?>
                                <li class="menu__item">
                                    <a href="<?php echo $key; ?>" class="menu__link"><?php echo $value; ?></a>
                                </li>
                        <?php  } ?>
                        <li class="menu__item inline">Website by&nbsp;<a href="/">iEstartegic</a></li>
                    </ul>
            </div>
        </footer>
        <script src="js/main.js"></script> 
    </body>
</html>
<?php //echo "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];?>