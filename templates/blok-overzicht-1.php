<?php
    /**
     *  Template Name: Blok overzicht 1
     */

   
    //code voor paginering
    //hoeveelheid post die getoond moeten worden
    $no = 6;
    global $delay;

    //funtie voor de paginatie, manipuleer de offset
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

    if($paged == 1)
    {
        $offset = 0;  
    }
    else 
    {
        $offset = ($paged-1) * $no;
    }
    
    //argumenten voor de projecten query inclusief paginatie
    $relatedPosts = array(
        'post_status'       => 'publish',
        'post_type'         => 'post',
        'cat'               => 52,
        'orderby'           => 'publish_date',
        'order'             => 'DESC',
        'offset' 			=> $offset,
        'posts_per_page'    => $no,
    );


    //query voor alle proejcten inclusief filter en paginatie    
    $relatedPosts_query = new WP_Query( $relatedPosts );


    get_header(); 
    the_content();

?>



<section class="py-12">
    <ul class="container mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
    <?php 
        $delay = 0;
        while($relatedPosts_query->have_posts()) : 
            $relatedPosts_query->the_post();	 
            require get_template_directory() . '/template-parts/block-1.php';
            $delay = $delay + 300;
        endwhile; 
        wp_reset_query();
    ?>  
    </ul>
</section>


<?php
  // bereken het aantal post van de query
  $total_results = $relatedPosts_query->found_posts; 
  //Toon de paginatie als het aantal post groter is dan het het aantal at je per pagina toont
  if ($total_results > $no):
?>

<section class="pb-12">
    <div class="container mx-auto pagination">
    <?php
        //bereken het aantal pagina's
        $total_pages=ceil($total_results/$no);

            echo paginate_links(array(  
                'base'      => get_pagenum_link(1) . '%_%',  
                'format'    => '?paged=%#%',  
                'current'   => $paged,  
                'total'     => $total_pages,  
                'prev_text' => 'Vorige',  
                'next_text' => 'Volgende',
                'type'      => 'list',
            )); 
    ?>
    </div>
</section>

<?php endif;?>

<?php get_footer(); ?>


