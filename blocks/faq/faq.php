
<?php
    //titel
    $titel = get_field('titel');
?>

<section class="faq my-8 md:my-12">
    <div class="container mx-auto">
        <div class="lg:w-5/6 mx-auto">
            <?php if ($titel):?>
                <h2 lass="mb-8"><?php echo $titel;?></h2>
            <?php endif;?>
            <?php
            // Check rows existexists.
            if( have_rows('veel_gestelde_vragen') ):

                $faqCounter = 1;

                echo '<div class="faq-wrapper">';

                // Loop through rows.
                while( have_rows('veel_gestelde_vragen') ) : the_row();


                    // Load sub field value.
                    $vraag = get_sub_field('vraag');
                    $antwoord = get_sub_field('antwoord');
                    // Do something...
                    ?>
                        <div class="tab border-t-4 border-black">
                            <input id="tab-<?php echo $faqCounter;?>" type="checkbox" name="tabs">
                            <label for="tab-<?php echo $faqCounter;?>" class="py-4 flex items-center justify-between"> 
                                <span class="h3"><?php echo $vraag;?></span>
                                <div class="icon">
                                    <span></span>
                                    <span></span>
                                </div>
                            </label>
                            <div class="tab-content">
                                <div itemprop="text" class="pb-8 standaard-content">
                                    <?php echo $antwoord;?>
                                </div>
                            </div>
                        </div>
                    <?php
                    $faqCounter ++;


                // End loop.
                endwhile;

                echo '</div>';
            // No value.
            else :
                // Do something...
            endif;
            
            ?>
            </div>
        </div>
    </div>    
</section>
