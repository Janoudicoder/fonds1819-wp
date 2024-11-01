<?php
    $videoCode = get_field( 'video_code' );
    if ($videoCode):
        $youTubeImgUrl = 'https://i.ytimg.com/vi/'.$videoCode.'/maxresdefault.jpg';
?>

<section class="video-embed my-8 md:my-12">
    <div class="container mx-auto">
        <div class="video-wrapper relative aspect-[8/4] relative lg:w-5/6 mx-auto rounded-30 overflow-hidden bg-cover bg-center" style="background-image:url('<?php echo $youTubeImgUrl;?>');">
            <div class="content absolute z-10 top-0 left-0 w-full h-full flex items-center justify-center">
                <a target="_blank" aria-label="Play" title="Speel video af" href="http://www.youtube.com/watch?v=<?php echo $videoCode;?>" class="popup-vimeo btn btn-white">Video afspelen</a>
            </div>
        </div>
    </div>
</section>

<?php endif;?>
