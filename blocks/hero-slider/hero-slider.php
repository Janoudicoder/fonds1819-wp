<?php

//$titelHeroSlider = get_field('titel');
$herotext = get_field('hero-text');

// Check if rows exist.
if (have_rows('afbeeldingen')):

    echo '<section class="hero-slider bg-[#FFFFF0] relative overflow-hidden">';
    echo '<div class="slider-wrapper">';

    // Set a specific height for the slider
    echo '<div class="hero-slick aspect-video w-full h-[500px] flex">'; // Add flex to align items

    // Loop through rows.
    while (have_rows('afbeeldingen')) : the_row();

        // Load sub field value.
        $afbeeldingHeroSlider = get_sub_field('afbeelding');
        $afbeeldingHeroSliderId = $afbeeldingHeroSlider['ID'];

        // Output the image wrapper
        echo '<div class="hero-slick__img-wrapper flex-shrink-0 w-full h-full relative overflow-hidden">'; // Ensure no shrinking

        // Image itself
        echo wp_get_attachment_image($afbeeldingHeroSliderId, 'full', "", ["class" => "object-cover w-full h-full", "alt" => ""]); // Cover entire area
        
        // SVG overlay
        echo '<div class="svg-overlay absolute inset-0 w-full h-full pointer-events-none">'; // SVG container over the image
        echo '<img src="'.get_bloginfo('template_url').'/fa/webfonts/herosliderlayer.svg" class="w-full h-full object-cover opacity-100" alt="SVG Overlay" />'; // SVG overlay
        echo '</div>'; 
       
        echo '</div>'; // Close hero-slick__img-wrapper

    // End loop.
    endwhile;

    echo '</div>'; // Close hero slick

    // Add the SVG wrapper here, below all images
    echo '<div class="svg-wrapper absolute left-1/2 transform -translate-x-1/2 bottom-20">'; // Center horizontally at the bottom
    echo '<svg width="200" height="97" viewBox="0 0 200 97" fill="none" xmlns="http://www.w3.org/2000/svg">';
    echo '<path d="M66.7464 0L0 67.3209C0 67.3209 147.608 97 200 97V11.0995C200 11.0995 178.23 17.6144 66.7464 0Z" fill="#02B19A" fill-opacity="0.2"/>';
    echo '</svg>';
    echo '</div>'; // Close svg-wrapper

    if (!empty($herotext)):
        // Caption wrapper
        echo '<div class="hero-slider__caption md:absolute w-1/2 md:left-0 bg-secondary md:bottom-0 md:z-10 flex items-center justify-center h-full md:flex-row md:space-x-4">'; // Flex container for large screens
        echo '<div class="caption-wrapper text-white w-full md:w-auto text-left p-6 sm:px-8 md:px-12 lg:px-20 sm:py-10">'; // Increased padding and text alignment to left
        echo '<div class="smaller-text standaard-content">'; 
        echo '<span class="title block mb-4 ">' . $herotext . '</span>'; // Increased text size
        echo '<div class="btn-text space-x-4 mt-4 md:space-x-4">'; // Added space between buttons
        
        // Buttons styled for larger screens
        echo '<a class="btn btn-secondary" href="">Over ons ontstaan</a>'; // First button
        echo '<a class="btn" href="">Quickscan</a>'; // Second button 
        
        echo '</div>'; 
        echo '</div>'; // Closing smaller-text div
        echo '</div>';
        echo '</div>';
    endif;

    echo '</div>'; // Close slider wrapper
    echo '</section>';

else :
    // Do something...
endif;

?>
