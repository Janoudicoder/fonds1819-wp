<li>
    <a title="<?php the_title();?>" href="<?php the_permalink();?>" class="item-block h-full block aspect-[4/5] bg-purple overflow-hidden relative text-white">
        <div class="img-wrapper absolute h-full w-full top-0 left-0 z-10">
        <?php 
            if (has_post_thumbnail())
            {
                the_post_thumbnail('large',['class' => 'h-full w-full object-cover absolute left-0 top-0', 'alt' => false]);
            } 
            else 
            {
            ?>
                <img class="h-full w-full object-cover absolute left-0 top-0" src="<?php echo bloginfo('template_url');?>/images/placeholder.jpg" alt="do-achterhoek.nl">
        <?php } ?>
        </div>
        <div class="content absolute z-20 bottom-0 left-0 w-full p-8 z-20 flex flex-col justify-end">
            <h3><?php the_title();?></h3>
            <p><?php echo the_field('overzicht_tekst', get_the_id());?></p>
            <?php if (get_the_excerpt()):?>
                <p><?php echo excerpt(20);?></p> 
            <?php endif;?>
            <div class="btn-wrapper">
                <div class="btn btn-secondary mt-8">Lees meer</div>
            </div>
        </div>
    </a>
</li>