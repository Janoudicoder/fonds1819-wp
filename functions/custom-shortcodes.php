<?php
    //custom knop 
    function button_shortcode($attr = array()) {
        // set up default parameters
        $args = shortcode_atts( array(
     
            'link' => '#',
            'tekst' => '#',
            'target' => '#',
 
        ), $attr );
        if ($attr['target']== '_blank')
        {
            $target = "_blank";
            $sr = '<span class="sr-only">opent nieuw scherm</span>';
        }
        else 
        {
            $target = "";
            $sr = "";
        }
        $output = '<a target="'.$target.'"  class="btn btn-block" href="'.$attr['link'].'">'.$attr['tekst'].' '.$sr.'</a>';
        return $output;

    }
    add_shortcode( 'button', 'button_shortcode' );