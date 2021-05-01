<?php /*Template Name: Servicios*/ ?>
<?php get_header(); ?>
<?php global $wp_query; ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<section class="services-ahj animated fadeIn">
    <div class="services-ahj__element">
        <div class="services-ahj__element-content services-ahj__element-content--right-slice">
        <?php $imagen_primer_bloque = get_field( 'imagen_primer_bloque' ); ?>    
        <?php if ( get_field( 'imagen_primer_bloque' ) ) : ?>
                <img src="<?php echo esc_url( $imagen_primer_bloque['url'] ); ?>" alt="<?php echo esc_attr( $imagen_primer_bloque['alt'] ); ?>"
                    class="services-ahj__element-content-img"/>
            <?php endif ?>
        </div>
        <div class="services-ahj__element-info">
            <h2 class="services-ahj__element-info-title"><?php the_field( 'titulo_primer_bloque' ); ?></h2>
            <p class="services-ahj__element-info-txt"><?php the_field( 'texto_primer_bloque' ); ?></p>
            <?php if ( get_field( 'pdf_primer_bloque' ) ) : ?>
	            <a href="<?php the_field( 'pdf_primer_bloque' ); ?>" target="_blank"
                class="services-ahj__element-info-btn"><?php the_field( 'texto_boton_servicios' ); ?></a>
            <?php endif; ?>
        </div>
    </div>
    <div class="services-ahj__element services-ahj__element--reverse">
        <div class="services-ahj__element-content services-ahj__element-content--left-slice">
        <?php $imagen_segundo_bloque = get_field( 'imagen_segundo_bloque' ); ?>    
        <?php if ( get_field( 'imagen_segundo_bloque' ) ) : ?>
                <img src="<?php echo esc_url( $imagen_segundo_bloque['url'] ); ?>" alt="<?php echo esc_attr( $imagen_segundo_bloque['alt'] ); ?>"
                    class="services-ahj__element-content-img"/>
            <?php endif ?>
        </div>
        <div class="services-ahj__element-info">
            <h2 class="services-ahj__element-info-title"><?php the_field( 'titulo_segundo_bloque' ); ?></h2>
            <p class="services-ahj__element-info-txt"><?php the_field( 'texto_segundo_bloque' ); ?></p>
            <?php if ( get_field( 'pdf_segundo_bloque' ) ) : ?>
            <a href="<?php the_field( 'pdf_segundo_bloque' ); ?>" target="_blank"
                class="services-ahj__element-info-btn services-ahj__element-info-btn--reverse"><?php the_field( 'texto_boton_servicios_segundo' ); ?></a>
            <?php endif; ?>
        </div>
    </div>
    <div class="services-ahj__element">
        <div class="services-ahj__element-content services-ahj__element-content--right-slice">
        <?php $imagen_tercer_bloque = get_field( 'imagen_tercer_bloque' ); ?>
        <?php if ( get_field( 'imagen_tercer_bloque' ) ) : ?>
            <img src="<?php echo esc_url( $imagen_tercer_bloque['url'] ); ?>" alt="<?php echo esc_attr( $imagen_tercer_bloque['alt'] ); ?>"
                class="services-ahj__element-content-img"/>
        <?php endif ?>
        </div>
        <div class="services-ahj__element-info">
            <h2 class="services-ahj__element-info-title"><?php the_field( 'titulo_tercer_bloque' ); ?></h2>
            <p class="services-ahj__element-info-txt"><?php the_field( 'texto_tercer_bloque' ); ?></p>
            <?php if ( get_field( 'pdf_tercer_bloque' ) ) : ?>
            <a href="<?php the_field( 'pdf_tercer_bloque' ); ?>" target="_blank"
                class="services-ahj__element-info-btn"><?php the_field( 'texto_boton_servicios_tercero' ); ?></a>
            <?php endif ?>
        </div>
    </div>
</section>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>