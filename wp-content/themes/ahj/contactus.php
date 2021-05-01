<?php /*Template Name: Contactenos*/ ?>
<?php get_header(); ?>
<?php global $wp_query; ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<section class="contact content">
    <div class="contact__trick">
        <h1 class="contact__trick-title">Contáctanos, responderemos <i>as soon as posible</i></h1>
        <div class="empty"></div>
    </div>
    <div class="contact__content">
        <div class="contact__content-left">
            <?php the_content(); ?>
        </div>
        <div class="contact__content-right">
            <h4 class="contact__content-right-title">Encuentranos:</h4>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d994.8633869592128!2d-73.63706022129958!3d4.130808098980604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3e2e11fbad2525%3A0x74e4e505f0118689!2sCra.%2047b%20%2312-7%2C%20Villavicencio%2C%20Meta!5e0!3m2!1ses-419!2sco!4v1589079186678!5m2!1ses-419!2sco"
                width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                tabindex="0"></iframe>
        </div>
    </div>
</section>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>