<!DOCTYPE html>
<html lang="nl">
<head>
    <title>
        <?php bloginfo('site_title'); ?> | 
        <?php 
            if (is_search()) {
                echo 'Gevonden zoekresultaten voor: ' . get_search_query();
            } else if ($post->ID) { 
                the_title(); 
            } else { 
                echo 'Pagina niet gevonden'; 
            }
        ?>
    </title>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <?php wp_head(); ?>
    
</head>

<body <?php body_class(); ?>>

<section id="header" class="bg-white">
<div class="container mx-auto max-w-[1882px] flex justify-evenly py-5">
            <div id="logoWrapper" class="block">
            <a class="block" title="Ga naar de homepagina" href="<?php echo bloginfo('url'); ?>">
                <img id="logo" class="h-[3.4rem] ml-auto" src="https://fonds1819.sitework.link/wp-content/uploads/2024/10/Rectangle.png" width="100%" border="0" alt="Naar de home page" />
            </a>
        </div>

        <div class="header__right flex flex-row-reverse items-center  md:w-[842px] lg:flex-row">
            <nav id="navigation1" class="navigation font-semibold" role="navigation" aria-label="Main">
                <div class="nav-header">
                    <button aria-expanded="false" type="button" title="open het hoofdmenu" class="nav-toggle font-semibold"></button>
                </div>
                <?php
                    wp_nav_menu(array( 
                        'theme_location' => 'primary', 
                        'menu'            => '',
                        'container'       => 'div',
                        'container_class' => 'nav-menus-wrapper font-semibold',
                        'container_id'    => '',
                        'menu_class'      => 'nav-menu font-semibold',
                        'menu_id'         => '',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'before'          => '',  
                        'after'           => '',
                        'link_before'     => '',
                        'link_after'      => '',
                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'item_spacing'    => 'preserve',
                        'depth'           => 0,
                        'walker'          => new My_Walker_Nav_Menu()
                    )); 
                ?>
            </nav>
            <div class="contact-info text-white ml-4 relative hidden xl:flex">
    <ul class="flex items-center">
        <li>
            <button class="btn hidden md:block">Quikscan</button>
        </li>
    </ul>
</div>

        </div>
    </div>
</section>


    
