<?php
    /*
    Template Name: Search Page
    */
    get_header(); 

    global $query_string;
    wp_parse_str( $query_string, $search_query );
    $search = new WP_Query( $search_query );
    global $wp_query;
    $total_results = $wp_query->found_posts;
?>

<section id="contentVervolgMain" class="py-6">	
    <div class="container mx-auto">
        <div class="mx-auto lg:w-5/6">
            <h1><?php printf( esc_html__( 'Zoek resultaten voor: %s', '' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
            <form method="get" id="searchform" class="searchform flex flex-col" action="<?php echo bloginfo('url');?>">
                <input id="s" name="s" value="" type="text" placeholder="Zoeken..." class="search px-4 py-2 bg-grijs">
            </form>
        </div>
	</div>
</section>

<?php
	if ( have_posts() ) : 
?>

<section id="themas" class="my-8 md:py-12">
    <div class="container mx-auto">
        <h2 class="mb-8">Gevonden resultaten: <?php echo $wp_query->found_posts;?></h2>
    </div>
    <ul class="container mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <?php
            while ( have_posts() ) : the_post();  
            require get_template_directory() . '/template-parts/block-2.php';
            endwhile;
        ?>
    </ul>
</section>


<?php
			
    else:

?>
    <section class="py-6">        
        <div class="container mx-auto">
            <h2>Er zijn helaas geen zoekresultaten</h2>
        </div>
    </section>

<?php
    endif; 
?>



<?php 	
    get_footer(); 
?>

