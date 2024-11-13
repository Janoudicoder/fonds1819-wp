<?php
global $delay;
$title = get_field('titel');
$postArray = get_field('paginas');
$catId = get_field('categorie');
$aantalPosts = get_field('aantal_posts');
$link = get_field('link');

if ($aantalPosts) {
    $numPosts = $aantalPosts;
} else {
    $numPosts = -1;
}

if (!empty($catId)) {
    $args = array(
        'post_type' => 'any',
        'cat' => $catId,
        'posts_per_page' => $numPosts
    );
} elseif (!empty($postArray)) {
    $args = array(
        'post_type' => 'any',
        'post__in' => $postArray,
        'posts_per_page' => $numPosts
    );
}

$wp_query = new WP_Query($args);
?>

<section class="relative mt-8 md:mt-12 overflow-hidden">


    <div class="absolute top-0 left-0 w-full h-full md:h-[70%] bg-secondary rounded-br-lg z-0"></div>

    <!-- Content of the block -->
    <div class="ambassadeur-module p-4 md:p-8 lg:p-16 relative z-10"> <!-- Adjust padding for responsiveness -->
        

        <div class="mx-0 w-full grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <?php
            $delay = 0;
            while ($wp_query->have_posts()) :
                $wp_query->the_post();
                require get_template_directory() . '/template-parts/block-1.php';
                $delay += 300;
            endwhile;
            wp_reset_postdata();
            ?>
        </div>

        <?php if ($link):
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
           
        <?php endif; ?>
    </div>
        <div class="svg absolute left-[90%] transform -translate-x-1/2 bottom-[-0rem]  hidden md:block">
            <svg width="290" height="155" viewBox="0 0 290 155" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M196.549 0L295 107.575C295 107.575 77.2787 155 0 155V17.7363C0 17.7363 32.1113 28.1468 196.549 0Z" fill="#02B19A" fill-opacity="0.2"/>
            </svg>
        </div>
</section>
