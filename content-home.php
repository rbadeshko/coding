<main>
        
        <section class="section section__cats">
            <div class="cat_item cat_item-logo">
                <div class="logo-icon__block">
                    <img class="logo-icon__img" src="images/logo-icon.png" alt="logo-icon">
                </div>
                <div class="logo-desc">
                    <p class="prod-string__small">productos</p>
                    <p class="prod-string__big">descados</p>
                </div>
            </div>
            <!-- $first_section_pages -->
            <?php 
                    foreach($first_section_pages as $key => $value){ 
                        $cat_info = array_values($value);?>
                        <div class="cat_item">
                            <div class="cat-img__wrap">
                                <a href="<?php echo $key; ?>">
                                    <img class="cat-img lazy" src="<?php echo $cat_info[2]?>" alt="">
                                </a>   
                            </div>
                            <div class="cat-title">
                                <?php echo $cat_info[0]?>
                            </div>
                            <div class="cat-desc"><?php echo $cat_info[1]?></div>
                        </div>
                <?php  } ?>
        </section>
        <section class="section section__second-desc">
            <!-- $second_section -->
            <div class="desc-bg__wrap">
                <img class="main-header__img"src="<?php echo $second_section->image ?>" alt="">
            </div>
            
            <div class="desc-info__wrap">
                <div class="second-desc">
                    <h2 class="second-desc__title"><?php echo $second_section->title; ?></h2>
                    <div class="second__desc"><?php echo $second_section->content; ?></div>
                </div>
                
            </div>
            <div class="logos__block">
                    <?php 
                     $logos_array = array_values($second_section->logos);
                     foreach($logos_array as $value){ ?>
                        <div class="logo-item_wrap">
                            <img class="logo-item__img"src="<?php echo $value?>" alt="">
                        </div>
                    <?php 
                    };
                    ?>
                </div>
        </section>
<!-- $third_section_pages -->
        <section class="section products-block">
            <div class="small__container product__container">
                <h2 class="products-block__title"><?php echo $third_section_pages_title; ?></h2>
                <?php 
                    foreach($third_section_pages as $key => $value){ 
                        $prod_info = array_values($value);?>
                     
                        <div class="product__item">
                            <a class="product__link" href="<?php echo $key; ?>">
                                <img class="product__img" src="<?php echo $prod_info[2]?>" alt="" >
                                <div class="product__name"><?php echo $prod_info[0]?></div>
                                <div class="product__desc"><?php echo $prod_info[1]?></div>
                            </a>
                        </div>
                <?php  } ?>
                        

               
            </div>
        </section>
        <section class="section feautured-cat">
            <?php 
                    foreach($fourth_section_pages  as $key => $value){ 
                        $f_cat_info = array_values($value);?>
                     
                        <div class="fcat__item">
                            <a class="fcat__link" href="<?php echo $key; ?>">
                                <img class="fcat__img" src="<?php echo $f_cat_info[1]?>" alt="">
                                <div class="fcat__name"><?php echo $f_cat_info[0]?></div>
                            </a>
                        </div>
                <?php  } ?>
        </section>


        <section class="section catch-block">
            <div class="small__container between">
                <div class="info-block">
                    <div class="info-block__item info__name"><?php echo $_contact_section->name ?></div>
                    <div class="info-block__item info__text">Agencia de Marketing Digital</div>
                    <div class="info-block__item info__addr1"><?php echo $_contact_section->address ?></div>
                    <div class="info-block__item info__city"><?php echo $_contact_section->address_city ?></div>
                    <div class="info-block__item info__tel icon"><span><?php echo $_tel; ?></span><?php echo $_contact_section->phone ?></div>
                    <div class="info-block__item info__tel icon"><span><?php echo $_mail; ?></span><?php echo $_contact_section->email ?></div>
                    <div class="info-block__item info__tel icon"><span><?php echo $_map; ?></span><a href="#">Goole Map</a></div>

                </div>
                <div class="catch-form__block">
                    <?php echo $_contact_section->form_text ?>
                    <form class="catch-form catch-form__bottom" onsubmit="submitForm(event, this)">
                        <div class="form__fields">
                            <div class="form__field">
                                <label for="name">Nombre</label>
                                <input
                                    type="text"
                                    name="name"
                                    id="form-name"
                                    placeholder="Xavier"
                                    
                                />
                                <!-- 
                                    oninvalid="this.setCustomValidity('Introduzca el correo Nombre')"
                                    oninput="this.setCustomValidity('')"
                                    required -->
                            </div>
                            <div class="error">Introduzca el nombre</div>
                        </div>
                        <div class="form__fields">
                            <div class="form__field">
                                <label for="sname">Apellidos</label>
                                <input
                                    type="text"
                                    name="sname"
                                    id="form-sname"
                                    placeholder="Romano"
                                   
                                />
                                 <!-- 
                                    oninvalid="this.setCustomValidity('Introduzca el correo Apellidos')"
                                    oninput="this.setCustomValidity('')"
                                    required -->
                            </div>
                            <div class="error">introduzca el apellido</div>
                        </div>
                        <div class="form__fields">
                            <div class="form__field">
                                <label for="tel">Telefono</label>
                                <input
                                    type="number"
                                    name="tel"
                                    id="form-tel"
                                    placeholder="0644777777"
                                   
                                />
                                <!-- 
                                    oninvalid="this.setCustomValidity('Introduzca el correo Telefon')"
                                    oninput="this.setCustomValidity('')"
                                    required
                                 -->
                            </div>
                            <div class="error">introduzca el teléfono</div>
                        </div>
                        <div class="form__fields">
                            <div class="form__field">
                                <label for="mail">Email</label>
                                <input
                                    type="email"
                                    name="mail"
                                    id="form-mail"
                                    placeholder="xavier@gmail.com"
                                    oninvalid="this.setCustomValidity('Introduzca el correo electrónico')"
                                    oninput="this.setCustomValidity('')"
                                    
                                />
                                <!-- 
                                    oninvalid="this.setCustomValidity('Introduzca el correo electrónico')"
                                    oninput="this.setCustomValidity('')"
                                    required -->
                            </div>
                            <div class="error">introduzca el E-mail</div>
                        </div>
                        <div class="form__fields">
                            <div class="form__field">
                                <label for="cooments">comentarios</label>
                                <textarea
                                    name="comments"
                                    id="form-comments"
                                    
                                ></textarea>
                            </div>
                        </div>
                        <div class="form__fields">
                            <div>
                            <label class="label__container">
                                <input 
                                    id="checkbox" 
                                    type="checkbox"
                                   
                                    
                                    >
                                    <!--
                                    required 
                                    oninvalid="this.setCustomValidity('¿Está de acuerdo con las legal normas?')"
                                    oninput="this.setCustomValidity('')"
                                     -->
                                <span class="checkmark"></span>
                            </label>
                            <div class="error checkbox__message">He leido y accepto el aviso legal</div>
                            </div>
                            <button class="btn btn__send-message">ENVIAR</button>
                        </div>
                        
                        

                    </form>
                </div>
            </div>
        </section>
    </main>