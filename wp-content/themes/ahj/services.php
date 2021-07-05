<?php /*Template Name: Servicios*/ ?>
<?php get_header(); ?>
<?php global $wp_query; ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<main class="services">
    <section class="services-ahj animated fadeIn">
        <div class="services-ahj__titulo_logo">
            <figure class="services-ahj__titulo_logo_figure">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ahjInternationalLogo.png"
                    alt="AHJ International Logo" class="services-ahj__titulo_logo_figure_logo">
            </figure>
        </div>
        <div class="services-ahj__element">
            <div class="services-ahj__element-content services-ahj__element-content--right-slice">
                <?php $imagen_primer_bloque = get_field( 'imagen_primer_bloque' ); ?>
                <?php if ( get_field( 'imagen_primer_bloque' ) ) : ?>
                <img src="<?php echo esc_url( $imagen_primer_bloque['url'] ); ?>"
                    alt="<?php echo esc_attr( $imagen_primer_bloque['alt'] ); ?>"
                    class="services-ahj__element-content-img" />
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
                <img src="<?php echo esc_url( $imagen_segundo_bloque['url'] ); ?>"
                    alt="<?php echo esc_attr( $imagen_segundo_bloque['alt'] ); ?>"
                    class="services-ahj__element-content-img" />
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
                <img src="<?php echo esc_url( $imagen_tercer_bloque['url'] ); ?>"
                    alt="<?php echo esc_attr( $imagen_tercer_bloque['alt'] ); ?>"
                    class="services-ahj__element-content-img" />
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
    <figure class="services__paralaxFigure"></figure>
    <section class="services-ahj services-granChef animated fadeIn">
        <div class="services-ahj__titulo_logo">
            <figure class="services-ahj__titulo_logo_figure">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/granchefLogo.png"
                    alt="El Gran Chef Logo" class="services-ahj__titulo_logo_figure_logo">
            </figure>
        </div>
        <?php if ( have_rows( 'grupo_primera_oferta' ) ) : ?>
        <?php while ( have_rows( 'grupo_primera_oferta' ) ) : the_row(); ?>
        <div class="services-granChef_content">
            <h3 class="services-granChef_content_subtitle"><?php the_field( 'titulo_principal_gran_chef' ); ?></h3>
            <span
                class="services-granChef_content_duration"><?php the_field( 'segundo_texto_principal_gran_chef' ); ?></span>
            <?php if ( have_rows( 'grupo_informacion' ) ) : ?>
            <?php while ( have_rows( 'grupo_informacion' ) ) : the_row(); ?>
            <div class="services-granChef_content_wrapper">
                <div class="services-granChef_content_wrapper_wrap">
                    <figure class="services-granChef_content_wrapper_wrap_figure">
                        <?php $icono_primer_contenido = get_sub_field( 'icono_primer_contenido' ); ?>
                        <?php if ( $icono_primer_contenido ) : ?>
                        <img src="<?php echo esc_url( $icono_primer_contenido['url'] ); ?>"
                            alt="<?php echo esc_attr( $icono_primer_contenido['alt'] ); ?>"
                            class="services-granChef_content_wrapper_wrap_figure_icon" />
                        <?php endif; ?>
                    </figure>
                    <div class="services-granChef_content_wrapper_wrap_info">
                        <?php the_sub_field( 'contenido' ); ?>
                    </div>
                </div>
                <div class="services-granChef_content_wrapper_wrap">
                    <figure class="services-granChef_content_wrapper_wrap_figure">
                        <?php $icono_segundo_contenido = get_sub_field( 'icono_segundo_contenido' ); ?>
                        <?php if ( $icono_segundo_contenido ) : ?>
                        <img src="<?php echo esc_url( $icono_segundo_contenido['url'] ); ?>"
                            alt="<?php echo esc_attr( $icono_segundo_contenido['alt'] ); ?>"
                            class="services-granChef_content_wrapper_wrap_figure_icon" />
                        <?php endif; ?>
                    </figure>
                    <div class="services-granChef_content_wrapper_wrap_info">
                        <?php the_sub_field( 'contenido_dos' ); ?>
                    </div>
                </div>
                <div class="services-granChef_content_wrapper_wrap">
                    <figure class="services-granChef_content_wrapper_wrap_figure">
                        <?php $icono_tercer_contenido = get_sub_field( 'icono_tercer_contenido' ); ?>
                        <?php if ( $icono_tercer_contenido ) : ?>
                        <img src="<?php echo esc_url( $icono_tercer_contenido['url'] ); ?>"
                            alt="<?php echo esc_attr( $icono_tercer_contenido['alt'] ); ?>"
                            class="services-granChef_content_wrapper_wrap_figure_icon" />
                        <?php endif; ?>
                    </figure>
                    <div class="services-granChef_content_wrapper_wrap_info">
                        <?php the_sub_field( 'contenido_tres' ); ?>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
            <div class="services-granChef_content_contact">
                <p><?php the_field( 'texto_de_contacto_gran_chef' ); ?></p>
            </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>

        <?php if ( have_rows( 'grupo_segunda_oferta' ) ) : ?>
        <?php while ( have_rows( 'grupo_segunda_oferta' ) ) : the_row(); ?>
        <div class="services-granChef_content segundaOferta">
            <h3 class="services-granChef_content_subtitle"><?php the_sub_field( 'titulo_segunda_oferta' ); ?></h3>
            <span class="services-granChef_content_duration"><?php the_sub_field( 'subtexto_segunda_oferta' ); ?></span>
            <?php if ( have_rows( 'grupo_informacion_segunda_oferta' ) ) : ?>
            <?php while ( have_rows( 'grupo_informacion_segunda_oferta' ) ) : the_row(); ?>
            <div class="services-granChef_content_wrapper">
                <div class="services-granChef_content_wrapper_wrap">
                    <figure class="services-granChef_content_wrapper_wrap_figure">
                        <?php $icono_primer_contenido = get_sub_field( 'icono_primer_contenido' ); ?>
                        <?php if ( $icono_primer_contenido ) : ?>
                        <img src="<?php echo esc_url( $icono_primer_contenido['url'] ); ?>"
                            alt="<?php echo esc_attr( $icono_primer_contenido['alt'] ); ?>"
                            class="services-granChef_content_wrapper_wrap_figure_icon" />
                        <?php endif; ?>
                    </figure>
                    <div class="services-granChef_content_wrapper_wrap_info">
                        <?php the_sub_field( 'contenido' ); ?>
                    </div>
                </div>
                <div class="services-granChef_content_wrapper_wrap">
                    <figure class="services-granChef_content_wrapper_wrap_figure">
                        <?php $icono_segundo_contenido = get_sub_field( 'icono_segundo_contenido' ); ?>
                        <?php if ( $icono_segundo_contenido ) : ?>
                        <img src="<?php echo esc_url( $icono_segundo_contenido['url'] ); ?>"
                            alt="<?php echo esc_attr( $icono_segundo_contenido['alt'] ); ?>"
                            class="services-granChef_content_wrapper_wrap_figure_icon" />
                        <?php endif; ?>
                    </figure>
                    <div class="services-granChef_content_wrapper_wrap_info">
                        <?php the_sub_field( 'contenido_dos' ); ?>
                    </div>
                </div>
                <div class="services-granChef_content_wrapper_wrap">
                    <figure class="services-granChef_content_wrapper_wrap_figure">
                        <?php $icono_tercer_contenido = get_sub_field( 'icono_tercer_contenido' ); ?>
                        <?php if ( $icono_tercer_contenido ) : ?>
                        <img src="<?php echo esc_url( $icono_tercer_contenido['url'] ); ?>"
                            alt="<?php echo esc_attr( $icono_tercer_contenido['alt'] ); ?>"
                            class="services-granChef_content_wrapper_wrap_figure_icon" />
                        <?php endif; ?>
                    </figure>
                    <div class="services-granChef_content_wrapper_wrap_info">
                        <?php the_sub_field( 'contenido_tres' ); ?>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
            <div class="services-granChef_content_contact">
                <p><?php the_field( 'texto_de_contacto_gran_chef' ); ?></p>
            </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>

        <?php if ( have_rows( 'grupo_tercera_oferta' ) ) : ?>
        <?php while ( have_rows( 'grupo_tercera_oferta' ) ) : the_row(); ?>
        <div class="services-granChef_content terceraOferta">
            <h3 class="services-granChef_content_subtitle"><?php the_sub_field( 'titulo_tercera_oferta' ); ?></h3>
            <span class="services-granChef_content_duration"><?php the_sub_field( 'subtexto_tercera_oferta' ); ?></span>
            <?php if ( have_rows( 'grupo_informacion_tercera_oferta' ) ) : ?>
            <?php while ( have_rows( 'grupo_informacion_tercera_oferta' ) ) : the_row(); ?>
            <div class="services-granChef_content_wrapper">
                <div class="services-granChef_content_wrapper_wrap">
                    <figure class="services-granChef_content_wrapper_wrap_figure">
                        <?php $icono_primer_contenido = get_sub_field( 'icono_primer_contenido' ); ?>
                        <?php if ( $icono_primer_contenido ) : ?>
                        <img src="<?php echo esc_url( $icono_primer_contenido['url'] ); ?>"
                            alt="<?php echo esc_attr( $icono_primer_contenido['alt'] ); ?>"
                            class="services-granChef_content_wrapper_wrap_figure_icon" />
                        <?php endif; ?>
                    </figure>
                    <div class="services-granChef_content_wrapper_wrap_info">
                        <?php the_sub_field( 'contenido' ); ?>
                    </div>
                </div>
                <div class="services-granChef_content_wrapper_wrap">
                    <figure class="services-granChef_content_wrapper_wrap_figure">
                        <?php $icono_segundo_contenido = get_sub_field( 'icono_segundo_contenido' ); ?>
                        <?php if ( $icono_segundo_contenido ) : ?>
                        <img src="<?php echo esc_url( $icono_segundo_contenido['url'] ); ?>"
                            alt="<?php echo esc_attr( $icono_segundo_contenido['alt'] ); ?>"
                            class="services-granChef_content_wrapper_wrap_figure_icon" />
                        <?php endif; ?>
                    </figure>
                    <div class="services-granChef_content_wrapper_wrap_info">
                        <?php the_sub_field( 'contenido_dos' ); ?>
                    </div>
                </div>
                <div class="services-granChef_content_wrapper_wrap">
                    <figure class="services-granChef_content_wrapper_wrap_figure">
                        <?php $icono_tercer_contenido = get_sub_field( 'icono_tercer_contenido' ); ?>
                        <?php if ( $icono_tercer_contenido ) : ?>
                        <img src="<?php echo esc_url( $icono_tercer_contenido['url'] ); ?>"
                            alt="<?php echo esc_attr( $icono_tercer_contenido['alt'] ); ?>"
                            class="services-granChef_content_wrapper_wrap_figure_icon" />
                        <?php endif; ?>
                    </figure>
                    <div class="services-granChef_content_wrapper_wrap_info">
                        <?php the_sub_field( 'contenido_tres' ); ?>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
            <div class="services-granChef_content_contact">
                <p><?php the_field( 'texto_de_contacto_gran_chef' ); ?></p>
            </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>

        <?php if ( have_rows( 'grupo_cuarta_oferta' ) ) : ?>
        <?php while ( have_rows( 'grupo_cuarta_oferta' ) ) : the_row(); ?>
        <div class="services-granChef_content cuartaOferta">
            <h3 class="services-granChef_content_subtitle"><?php the_sub_field( 'titulo_cuarta_oferta' ); ?></h3>
            <span class="services-granChef_content_duration"><?php the_sub_field( 'subtexto_cuarta_oferta' ); ?></span>
            <?php if ( have_rows( 'grupo_informacion_cuarta_oferta' ) ) : ?>
            <?php while ( have_rows( 'grupo_informacion_cuarta_oferta' ) ) : the_row(); ?>
            <div class="services-granChef_content_wrapper">
                <div class="services-granChef_content_wrapper_wrap">
                    <figure class="services-granChef_content_wrapper_wrap_figure">
                        <?php $icono_primer_contenido = get_sub_field( 'icono_primer_contenido' ); ?>
                        <?php if ( $icono_primer_contenido ) : ?>
                        <img src="<?php echo esc_url( $icono_primer_contenido['url'] ); ?>"
                            alt="<?php echo esc_attr( $icono_primer_contenido['alt'] ); ?>"
                            class="services-granChef_content_wrapper_wrap_figure_icon" />
                        <?php endif; ?>
                    </figure>
                    <div class="services-granChef_content_wrapper_wrap_info">
                        <?php the_sub_field( 'contenido' ); ?>
                    </div>
                </div>
                <div class="services-granChef_content_wrapper_wrap">
                    <figure class="services-granChef_content_wrapper_wrap_figure">
                        <?php $icono_segundo_contenido = get_sub_field( 'icono_segundo_contenido' ); ?>
                        <?php if ( $icono_segundo_contenido ) : ?>
                        <img src="<?php echo esc_url( $icono_segundo_contenido['url'] ); ?>"
                            alt="<?php echo esc_attr( $icono_segundo_contenido['alt'] ); ?>"
                            class="services-granChef_content_wrapper_wrap_figure_icon" />
                        <?php endif; ?>
                    </figure>
                    <div class="services-granChef_content_wrapper_wrap_info">
                        <?php the_sub_field( 'contenido_dos' ); ?>
                    </div>
                </div>
                <div class="services-granChef_content_wrapper_wrap">
                    <figure class="services-granChef_content_wrapper_wrap_figure">
                        <?php $icono_tercer_contenido = get_sub_field( 'icono_tercer_contenido' ); ?>
                        <?php if ( $icono_tercer_contenido ) : ?>
                        <img src="<?php echo esc_url( $icono_tercer_contenido['url'] ); ?>"
                            alt="<?php echo esc_attr( $icono_tercer_contenido['alt'] ); ?>"
                            class="services-granChef_content_wrapper_wrap_figure_icon" />
                        <?php endif; ?>
                    </figure>
                    <div class="services-granChef_content_wrapper_wrap_info">
                        <?php the_sub_field( 'contenido_tres' ); ?>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
            <div class="services-granChef_content_contact">
                <p><?php the_field( 'texto_de_contacto_gran_chef' ); ?></p>
            </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>

    </section>
    <figure class="services__paralaxFigure baking"></figure>
</main>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>