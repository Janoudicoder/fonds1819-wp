<?php 
    function wpfieldwork_register_acf_blocks() 
    {
        // Check availability of block editor
        if ( ! function_exists( 'register_block_type' ) ) {
            return;
        }
        // adjust location(s) as needed for block.json
        register_block_type( get_template_directory() . '/blocks/hero-slider/block.json' );
        register_block_type( get_template_directory() . '/blocks/text-img/block.json' );
        register_block_type( get_template_directory() . '/blocks/blok-overzicht-2/block.json' );
        register_block_type( get_template_directory() . '/blocks/hero-video/block.json' );
        register_block_type( get_template_directory() . '/blocks/faq/block.json' );
        register_block_type( get_template_directory() . '/blocks/video-embed/block.json' );
        register_block_type( get_template_directory() . '/blocks/afbeelding/block.json' );
        register_block_type( get_template_directory() . '/blocks/blok-overzicht-1/block.json' );
        register_block_type( get_template_directory() . '/blocks/text/block.json' );
        register_block_type( get_template_directory() . '/blocks/quote/block.json' );
        register_block_type( get_template_directory() . '/blocks/blok-slider/block.json' );
        register_block_type( get_template_directory() . '/blocks/multistep-form/block.json' );

    }

    add_action( 'init', 'wpfieldwork_register_acf_blocks' );

    add_filter( 'allowed_block_types_all', 'only_allow_sitework_block_types', 25, 2 );

    function only_allow_sitework_block_types( $allowed_blocks, $editor_context ) 
    {
        return array(
            'acf/afbeelding',
            'acf/blok-overzicht-1',
            'acf/blok-overzicht-2',
            'acf/blok-slider',
            'acf/faq',
            'acf/hero-slider',
            'acf/hero-video',
            'acf/quote',
            'acf/text',
            'acf/text-img',
            'acf/video-embed',
            'acf/multistep-form'

        );
    }

