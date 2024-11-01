
<?php
    $tekstBlock = get_field('tekst');
    $achtergrond = get_field('achtergrond');

    if($achtergrond):
        $attachment_image = wp_get_attachment_url( $achtergrond );
        $textColor = 'text-white';
    endif;
    ?>

<?php if($tekstBlock):?>


<section class="quote-block my-8 md:my-12">
   
    <div class="container mx-auto" style="background-image: url('<?php echo $attachment_image;?>');">
        <div class="lg:w-5/6 mx-auto">
            <div class="py-36 px-4 text-center <?php echo $textColor;?>">
                <span class="quote drop-shadow-2xl wow fadeInUp"><?php echo $tekstBlock;?></span>
            </div>
        </div>   
    </div>    
</section>

<?php endif;?>

