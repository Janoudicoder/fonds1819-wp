<?php
    //KLANT LOGO BIJ INLOG SCHERM
    function my_login_logo() { ?>
        <style type="text/css">
            #login h1 a, .login h1 a {
                background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/logo.svg);
                height:65px;
                width:320px;
                background-size: contain;
                background-repeat: no-repeat;
                padding-bottom: 30px;
            }
        </style>
    <?php }


    //SITE WORK INLOG SCHERM STYLING
    add_action( 'login_enqueue_scripts', 'my_login_logo' );
    function my_login_stylesheet() {
        wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/style-login.css' );
    }
    add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );

    add_filter( 'login_headerurl', 'my_custom_login_url' );
    
    function my_custom_login_url($url) 
    {
        return 'https://sitework.nl/';
    }
