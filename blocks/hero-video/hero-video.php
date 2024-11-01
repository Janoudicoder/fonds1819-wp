<?php
    $titelHeroVideo = get_field( 'titel' );
    $subTitelHeroVideo = get_field( 'sub_titel' );
    $videoCode = get_field( 'video_code' );
?>


<section class="video-hero aspect-video my-8 md:my-12">
    <div class="jarallax-wrapper relative">
        <div class="jarallax-content absolute w-full h-full z-10 flex items-center">
            <div class="container mx-auto flex flex-col justify-center items-center text-center text-white px-8">
                <h1 class="text-primary mb-2"><?php echo $titelHeroVideo;?></h1>
                <h3 class="text-primary mb-2"><?php echo $subTitelHeroVideo;?></h3>
            </div>
        </div>
        <div class="jarallax" data-jarallax-video="https://www.youtube.com/embed/<?php echo $videoCode;?>?start=20&rel=0&autoplay=1" data-status="1" data-sound="-1"></div>
    </div>
</section>
