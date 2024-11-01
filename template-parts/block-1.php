
<style>
li {
    list-style: none; 
}
</style>
<li class="wow fadeInUp" data-wow-delay="<?php echo $delay;?>ms">
    <a title="<?php the_title();?>" href="<?php the_permalink();?>" class="item-block h-full block aspect-[4/5] bg-purple overflow-hidden relative text-white shadow-lg transition-transform duration-300 hover:-translate-y-1">
        <div class="img-wrapper absolute h-full w-full top-0 left-0 z-10">
            <?php 
                if (has_post_thumbnail()) {
                    the_post_thumbnail('large', ['class' => 'h-full w-full object-cover absolute left-0 top-0', 'alt' => false]);
                } else {
            ?>
                <img class="h-full w-full object-cover absolute left-0 top-0" src="<?php echo bloginfo('template_url');?>/images/placeholder.jpg">
            <?php } ?>
        </div>
        <div class="arrow content absolute z-20 bottom-0 left-0 w-full p-8 flex flex-col justify-end">
            <div class="flex items-center justify-between">
                <h3 class="font-merriweather font-bold text-[32px]"><?php the_title();?></h3>
                <span class="arrow-icon">
                    <!-- Inserted SVG for the arrow icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-6 h-11 text-white">
                        <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" fill="currentColor"/>
                    </svg>
                </span>
            </div>
        </div>
    </a>
</li>
