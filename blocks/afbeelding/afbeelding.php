<?php
    //haal de waardes op
    $afbeeldingen = get_field( 'afbeeldingen' );

    // Check of er een afbeelding geupload is.
    if( !empty($afbeeldingen) ):
?>

 <section class="single-afbeelding my-8 md:my-12">
    <div class="container mx-auto relative">
        <div class="md:w-5/6 mx-auto">
            <?php echo wp_get_attachment_image( $afbeeldingen['id'], 'full', "", ["class" => "w-full h-auto"] );?>
        </div>
    </div>
 </section> 

<?php
    endif;
?>