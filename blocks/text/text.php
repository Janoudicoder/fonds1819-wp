
<?php
    $tekstBlock = get_field('tekst');
    $tweeKolommen = get_field('twee_kolommen');
    $tekstRechts = get_field('tekst_rechts');
?>

<section class="text-smoelen my-8 md:my-8">
    <div class="container mx-auto">
        <?php if($tweeKolommen):?>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-16 justify-center w-[736px]	 mx-auto">
                <?php if($tekstBlock):?>
                    <div class="standaard-content">
                        <?php echo $tekstBlock;?>
                    </div>
                <?php endif;?>
                <?php if($tekstRechts):?>
                    <div class="standaard-content">
                    <?php echo $tekstRechts;?>
                    </div>
                <?php endif;?>
            </div>
        <?php else:?>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8  lg:w-[736px] mx-auto">
                <?php if($tekstBlock):?>
                    <div class="standaard-content md:col-span-3">
                    <?php echo $tekstBlock;?>
                    </div>
                <?php endif;?>
            </div>   
        <?php endif;?>
    </div>    
</section>
