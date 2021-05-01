<?php /*Template Name: Noticias*/ ?>
<?php get_header(); ?>
<section class="blog content">
    <h1 class="blog-principal-title">Noticias</h1>
    <div class="blog-wrapper">
        <?php $query = new WP_Query( "'post_type' => array( 'post' )" ); ?>
        <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
        <a href="<?php the_permalink() ?>" class="blog__card">
            <?php if ( get_field( 'imagen_noticia' ) ) : ?>
            <img src="<?php the_field( 'imagen_noticia' )?>"  class="blog__card-img"/>
            <?php endif ?>
            <div class="blog__card-info-content">
                <h2 class="blog__card-info-content-title"><?php the_title(); ?></h2>
                <div class="blog__card-info-content-wrapper">
                    <span class="blog__card-info-content-wrapper-txt">Por: <b><?php the_author(); ?></b></span>
                    <span class="blog__card-info-content-wrapper-txt"><?php echo get_the_date('F j, Y'); ?></span>
                </div>
                <?php wp_trim_excerpt(the_excerpt()); ?>
                <button class="blog__card-info-content-readmore">Leer Más ></button>
            </div>
        </a>
        <?php endwhile; wp_reset_postdata(); else : ?>
        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
    </div>
</section>
<?php get_footer(); ?>