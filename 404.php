<?php 
    get_header();
    $website = get_bloginfo('url'); #gets your blog's url from wordpress
?>

<section id="contentVervolgMain">
    <div class="container mx-auto my-8 md:my-16">
        <div class="md:w-5/6">
            <?php echo $_SERVER['HTTP_REFERER'];?>
            <h1 class="mb-8">Sorry de pagina <?php echo $website.$_SERVER['REQUEST_URI'];?> is niet gevonden</h1>
            <a class="btn btn-block mb-8" href="<?php echo bloginfo('url');?>">Ga naar onze homepage</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>


