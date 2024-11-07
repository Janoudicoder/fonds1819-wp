<?php
 // Primaire knop shortcode
function button_primaire_shortcode($atts) {
    // Standaard attributen voor de knop
    $atts = shortcode_atts(
        array(
            'link' => '',
            'tekst' => 'Lees meer',
            'target' => '_self',
        ),
        $atts,
        'button-primaire'
    );
    
    // Genereer de HTML voor de primaire knop
    $output = '<a target="' . esc_attr($atts['target']) . '" class="btn btn-primary" href="' . esc_url($atts['link']) . '">' . esc_html($atts['tekst']) . '</a>';
    
    return $output;
}
add_shortcode('button-primaire', 'button_primaire_shortcode');

// Secundaire knop shortcode
function button_secondaire_shortcode($atts) {
    // Standaard attributen voor de knop
    $atts = shortcode_atts(
        array(
            'link' => '',
            'tekst' => 'Lees meer',
            'target' => '_self',
        ),
        $atts,
        'button-secondaire'
    );
    
    // Genereer de HTML voor de secundaire knop
    $output = '<a target="' . esc_attr($atts['target']) . '" class="btn btn-secondary" href="' . esc_url($atts['link']) . '">' . esc_html($atts['tekst']) . '</a>';
    
    return $output;
}
add_shortcode('button-secondaire', 'button_secondaire_shortcode');

function button_block_shortcode($atts) {
    // Standaard attributen voor de knop
    $atts = shortcode_atts(
        array(
            'link' => '',
            'tekst' => 'Lees meer',
            'target' => '_self',
        ),
        $atts,
        'button-block'
    );
    
    // Genereer de HTML voor de secundaire knop
    $output = '<a target="' . esc_attr($atts['target']) . '" class="btn btn-block" href="' . esc_url($atts['link']) . '">' . esc_html($atts['tekst']) . '</a>';
    
    return $output;
}
add_shortcode('button-block', 'button_block_shortcode');
