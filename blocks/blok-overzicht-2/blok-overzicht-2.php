

<?php
    global $delay;
    $title = get_field('titel');
    $postArray = get_field('paginas');
    $catId = get_field('categorie');
    $aantalPosts = get_field('aantal_posts');
    $link = get_field('link');

    if($aantalPosts):
        $numPosts = $aantalPosts;
    else:
        $numPosts = -1;
    endif;



    if (!empty($catId)):


        $args = array(
            'post_type' => 'any',
            'cat' => $catId,
            'posts_per_page' => $numPosts
        );

    elseif (!empty($postArray)):

        $args = array(
            'post_type' => 'any',
            'post__in'       => $postArray,
            'posts_per_page' => $numPosts
        );
    endif;



    $wp_query = new WP_Query( $args );
    ?>

<section class="ambassadeur-module my-8 md:my-12">
    <?php if($title):?>
        <div class="container mx-auto mb-4">
            <h2 class="big-title"><?php echo $title;?></h2>
        </div>
    <?php endif;?>
    <ul class="container mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
    <?php  
        $delay = 0;
        while($wp_query->have_posts()) : 
            $wp_query->the_post();	
            require get_template_directory() . '/template-parts/block-2.php';
            $delay = $delay + 300;
        endwhile;
        wp_reset_postdata();
    ?>
    </ul>
    <?php
        if( $link ): 
        $link_url = $link['url'];
        $link_title = $link['title'];
        $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
        <div class="container mx-auto flex justify-end mt-8">
            <a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
        </div>
    <?php endif; ?>
</section>
