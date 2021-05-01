<?php /*Template Name: Nosotros*/ ?>
<?php get_header(); ?>
<?php global $wp_query; ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<section class="about-us-header animated fadeIn">
    <?php $imagen_de_fondo = get_field( 'imagen_de_fondo' ); ?>
    <?php if ( $imagen_de_fondo ) : ?>
    <img class="about-us-header__principal-img" src="<?php echo esc_url( $imagen_de_fondo['url'] ); ?>"
        alt="<?php echo esc_attr( $imagen_de_fondo['alt'] ); ?>" />
    <?php endif; ?>
    <div class="about-us-header__info-content">
        <p class="about-us-header__info-content-txt"><?php the_field( 'texto_de_cabecera' ); ?></p>
    </div>
</section>
<section class="our-team content animated fadeIn">
    <h1 class="our-team__title"><?php the_field( 'titulo_nuestro_equipo' ); ?></h1>
    <div class="our-team__content">
        <?php if ( have_rows( 'izquierda' ) ) : ?>
        <?php while ( have_rows( 'izquierda' ) ) : the_row(); ?>
        <div class="our-team__content-info">
            <?php $imagen_retrato_izquierda = get_sub_field( 'imagen_retrato_izquierda' ); ?>
            <?php if ( $imagen_retrato_izquierda ) : ?>
            <img class="our-team__content-info-img" src="<?php echo esc_url( $imagen_retrato_izquierda['url'] ); ?>"
                alt="<?php echo esc_attr( $imagen_retrato_izquierda['alt'] ); ?>" />
            <?php endif; ?>
            <div class="our-team__content-info-txt">
                <h3 class="our-team__content-info-txt--blue">
                    <?php the_sub_field( 'nombre_persona_retrato_izquierda' ); ?></h3>
                <span><?php the_sub_field( 'cargo_de_la_persona_izquierda' ); ?></span>
                <span><?php the_sub_field( 'otro_cargo_izquierda' ); ?></span>
            </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
        <?php if ( have_rows( 'derecha' ) ) : ?>
        <?php while ( have_rows( 'derecha' ) ) : the_row(); ?>
        <div class="our-team__content-info">
            <?php $imagen_retrato_derecha = get_sub_field( 'imagen_retrato_derecha' ); ?>
            <?php if ( $imagen_retrato_derecha ) : ?>
            <img class="our-team__content-info-img" src="<?php echo esc_url( $imagen_retrato_derecha['url'] ); ?>"
                alt="<?php echo esc_attr( $imagen_retrato_derecha['alt'] ); ?>" />
            <?php endif; ?>
            <div class="our-team__content-info-txt">
                <h3 class="our-team__content-info-txt--blue"><?php the_sub_field( 'nombre_persona_retrato_derecha' ); ?>
                </h3>
                <span><?php the_sub_field( 'cargo_de_la_persona_derecha' ); ?></span>
                <span><?php the_sub_field( 'otro_cargo_derecha' ); ?></span>
            </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>
<section class="who-are-we content animated fadeIn">
    <h2 class="who-are-we-title"><?php the_field( 'titulo_quienes_somos' ); ?></h2>
    <div class="who-are-we__mision-vision">
        <?php if ( have_rows( 'mision' ) ) : ?>
        <?php while ( have_rows( 'mision' ) ) : the_row(); ?>
        <div class="who-are-we__mision-vision-content">
            <h3 class="who-are-we__mision-vision-content-title"><?php the_sub_field( 'titulo_mision' ); ?></h3>
            <p class="who-are-we__mision-vision-content-text"><?php the_sub_field( 'texto_mision' ); ?></p>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
        <?php if ( have_rows( 'vision' ) ) : ?>
        <?php while ( have_rows( 'vision' ) ) : the_row(); ?>
        <div class="who-are-we__mision-vision-content">
            <h3 class="who-are-we__mision-vision-content-title"><?php the_sub_field( 'titulo_vision' ); ?></h3>
            <p class="who-are-we__mision-vision-content-text"><?php the_sub_field( 'texto_vision' ); ?></p>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>
<section class="our-candidates animated fadeIn">
    <h2 class="our-candidates__title"><?php the_field( 'titulo_viajar_a' ); ?></h2>
    <div class="our-candidates__content">
        <?php $imagen_de_fondo_viajar_a = get_field( 'imagen_de_fondo_viajar_a' ); ?>
        <img src="<?php echo esc_url( $imagen_de_fondo_viajar_a['url'] ); ?>"
            alt="<?php echo esc_attr( $imagen_de_fondo_viajar_a['alt'] ); ?>" class="our-candidates__content-img">
        <div class="our-candidates__content-countries">
            <ul class="our-candidates__content-countries-content">
                <?php $lista_de_seleccion_de_paises_checked_values = get_field( 'lista_de_seleccion_de_paises' ); ?>
                <?php if ( $lista_de_seleccion_de_paises_checked_values ) : ?>
                <?php foreach ( $lista_de_seleccion_de_paises_checked_values as $lista_de_seleccion_de_paises_value ): ?>
                <li class="our-candidates__content-countries-content-list">
                    <?php echo esc_html( $lista_de_seleccion_de_paises_value ); ?></li>
                <?php endforeach; ?>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</section>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>