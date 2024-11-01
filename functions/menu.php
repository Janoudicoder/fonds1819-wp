<?php
    // VOEG EEN HOOFDMENU TOE
    function sitework_custom_menus() {
        register_nav_menus(
                array(
                    'primary' => __('Hoofdmenu'),
                )
        );
    }
    add_action('init', 'sitework_custom_menus');

    class My_Walker_Nav_Menu extends Walker_Nav_Menu {
    
        // Displays start of an element. E.g '<li> Item Name'
        // @see Walker::start_el()
        function start_lvl( &$output, $depth = 0, $args = array() ) {
            $indent = str_repeat("\t", $depth);
            $output .= "\n$indent<ul class=\"nav-dropdown nav-submenu\">\n";
        }
    }