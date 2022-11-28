<?php 
    /* Template Name: Contact */
    get_header();

?>

    <div class="contactHeader">
        <?php get_template_part('/libs/hero-header'); ?>
    </div>
 
    <section class="contactPage" id="contact">
        <?php get_template_part('/libs/contact/contact'); ?>

        <?php get_template_part('/libs/home/contactForm'); ?>
    </section>

<?php 

    get_footer();

?>