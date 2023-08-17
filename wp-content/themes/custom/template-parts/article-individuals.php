<!-- Section with imagesa with individual texts adn buttons-->
    <section>
        <div class="container">
            <h2><?php echo get_theme_mod('imageTextButton_heading', 'A section with images with individual texts and buttons'); ?></h2>
            <p><?php echo get_theme_mod('imageTextButton_text_top', 'Ipsum odio a in et, id bibendum. Risus, facilisis semper etiam vestibulum vitae, ultricies lobortis et. Fringilla pellentesque magna gravida mollis tempor varius ac, proin turpis. Tempus malesuada tincidunt faucibus orci ac.'); ?></p>
            <div class="box-frame">
                <!--<div class="col-md-4">
                    <?php 
                            if(is_active_sidebar('box1')) {
                                dynamic_sidebar('box1');
                            }
                        ?>
                </div>

                <div class="col-md-4">
                        <?php 
                            if(is_active_sidebar('box2')) {
                                dynamic_sidebar('box2');
                            }
                        ?>
                </div>

                <div class="col-md-4">
                        <?php 
                            if(is_active_sidebar('box3')) {
                                dynamic_sidebar('box3');
                            }
                        ?>
                </div>-->
                <div class="box">
                    <div class="img-frame">
                        <img src="<?php echo get_theme_mod('imageTextButton_image', get_template_directory_uri().'/assets/images/Rectangle 1286.png') ?>" alt="" class="img-fluid img-center" />
                    </div>
                    <p class="text-center"><?php echo get_theme_mod('imageTextButton_text', 'A section with images with individual texts and buttons'); ?></p>
                    <a href="<?php echo get_theme_mod('imageTextButton_button_url', '#'); ?>" class="btn btn-primary btn-center w-100"><?php echo get_theme_mod('imageTextButton_button_text', 'View products'); ?></a>
                </div>
                <div class="box">
                    <div class="img-frame">
                        <img src="<?php echo get_theme_mod('imageTextButton_image2', get_template_directory_uri().'/assets/images/Rectangle 1286(1).png') ?>" alt="" class="img-fluid img-center" />
                    </div>
                    <p class="text-center"><?php echo get_theme_mod('imageTextButton_text2', 'A section with images with individual texts and buttons'); ?></p>
                    <a href="<?php echo get_theme_mod('imageTextButton_button_url2', '#'); ?>" class="btn btn-primary btn-center w-100"><?php echo get_theme_mod('imageTextButton_button_text2', 'View products'); ?></a>
                </div>
                <div class=" box">
                    <div class="img-frame">
                        <img src="<?php echo get_theme_mod('imageTextButton_image3', get_template_directory_uri().'/assets/images/Rectangle 1286(2).png') ?>" alt="" class="img-fluid img-center" />
                    </div>
                    <p class="text-center"><?php echo get_theme_mod('imageTextButton_text3', 'A section with images with individual texts and buttons'); ?></p>
                    <a href="<?php echo get_theme_mod('imageTextButton_button_url3', '#'); ?>" class="btn btn-primary btn-center w-100"><?php echo get_theme_mod('imageTextButton_button_text3', 'View products'); ?></a>
                </div>

                
            </div>
        </div>
    </section>