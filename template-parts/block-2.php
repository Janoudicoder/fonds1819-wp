<li class="wow fadeInUp" data-wow-delay="<?php echo $delay;?>ms">
    <a title="Lees het nieuwsbericht: <?php the_title();?>" href="<?php the_permalink();?>" class="news-item-block flex flex-col w-full h-full overflow-hidden">
        <div class="img-container aspect-[4/3] w-full relative ">          
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
        <div class="content w-full p-8 flex flex-col grow bg-grijs">
            <div class="grow">
                <h3><?php the_title();?></h3>
                <span class="block mb-4 text-secondary font-bold"><?php echo get_the_date( 'd M Y', get_the_id() );?></span>
                <p><?php echo excerpt(20);?></p> 
            </div>
            <div class="btn-container mt-8 flex justify-end">
                <span class="btn btn-secondary">Lees meer</span>
            </div>
        </div>
    </a>
</li>
