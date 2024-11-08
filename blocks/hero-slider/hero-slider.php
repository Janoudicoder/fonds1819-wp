<?php

$titelHeroSlider = get_field('hero-text');
$subTitelHeroSlider = get_field('hero-subtext'); // Ensure you have this defined

if (have_rows('afbeeldingen')) :

    echo '<section class="hero-slider max-[975px]:flex max-[975px]:flex-col-reverse bg-[#FFFFF0] w-full">';

    if (!empty($titelHeroSlider)) :
        // Adjust the height of the caption based on screen size
        echo '<div class="hero-slider__caption w-full min-[1009px]:w-[50%] min-[1009px]:absolute min-[1009px]:z-10 min-[1009px]:float-left flex items-start justify-center overflow-hidden relative">'; // Add "relative" here to position the SVG correctly within this section.
        echo '<div class="container mx-auto text-center">';
        echo '<div class="caption-wrapper text-white bg-secondary py-4 px-10 md:px-12 xl:px-20 sm:pt-4 xl:py-10 xxl:py-44 rounded-bl-[45px] mx-auto">';

        // New div for hero text
        echo '<div class="hero-tekst text-center" style="font-weight: 300;">'; 
        echo '<h2 class="text-[42px] mb-2 lg:text-[48px] xl:text-[56px] xxl:text-[64px]">' . $titelHeroSlider . '</h2>'; // Responsive Title

        // Check for subtitle and apply responsive sizes
        if (!empty($subTitelHeroSlider)) :
            echo '<p class="text-[18px] lg:text-[20px] xl:text-[22px] xxl:text-[24px]">' . $subTitelHeroSlider . '</p>'; // Responsive Subtitle
        endif;

        echo '</div>'; // Close the hero-tekst div
        echo '</div>';
        echo '</div>';

        // SVG container inside the caption section
       

        echo '</div>'; // Close hero-slider__caption
    endif;

    // Slider section
    echo '<div class="hero-slider z-[9] min-[1009px]:float-right relative overflow-hidden w-full min-[1009px]:w-[52%] h-full">'; // Make sure the slider takes full height
    echo '<div class="slider-wrapper h-full">'; // Ensure the slider wrapper takes full height
    echo '<div class="hero-slick min-[1009px]:aspect-video w-full h-full">'; // Set aspect ratio to full height

    while (have_rows('afbeeldingen')) : the_row();

        $afbeeldingHeroSlider = get_sub_field('afbeelding');
        $afbeeldingHeroSliderId = $afbeeldingHeroSlider['ID'];

        echo '<div class="hero-slick__img-wrapper relative h-full">'; // Ensure each image wrapper takes full height

        echo '<div class="absolute top-[-69px] pb-0 left-0 w-full h-[54px] ' . $hoofdfont . ' text-center text-[24px] lg:text-[40px] z-10 flex items-center justify-center lg:py-0 py-0">';
        echo $blocktitle;
        echo '</div>';

        echo '<div class="img-wrapper w-full relative overflow-hidden h-full">'; // Ensure image wrapper takes full height
        echo wp_get_attachment_image($afbeeldingHeroSliderId, 'full', "", ["class" => "max-[640px]:h-[35vh] max-[975px]:h-[50vh] w-full h-auto object-cover"]);

        echo '<div class="svg-overlay absolute inset-0 w-full h-full pointer-events-none">';
        echo '<img src="' . get_bloginfo('template_url') . '/fa/webfonts/herosliderlayer.svg" class="w-full h-full object-cover opacity-100" alt="SVG Overlay" />';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
       
    

echo '</div>';

    endwhile;

    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '<div class="absolute left-0 top-0 z-[0] w-full h-full overflow-visible">'; // Container with visible overflow
    echo '<div class="absolute bottom-[-2px] left-1/2 translate-x-[-60%] w-[20%] h-auto pointer-events-none z-0 hidden lg:block">'; // Show SVG only on large screens
        echo '<svg width="200" height="97" viewBox="0 0 200 97" fill="none" xmlns="http://www.w3.org/2000/svg">';
            echo '<path d="M66.7464 0L0 67.3209C0 67.3209 147.608 97 200 97V11.0995C200 11.0995 178.23 17.6144 66.7464 0Z" fill="#02B19A" fill-opacity="0.2"/>';
        echo '</svg>';
    echo '</div>';
echo '</div>';

    
    

    echo '</section>';

else :
    // Do something...
endif;

?>
