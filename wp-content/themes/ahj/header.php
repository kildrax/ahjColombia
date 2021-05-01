<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Te preparamos para que puedas vivir una experiencia única aplicando en alguno de nuestros programas como Au Pair, Voluntariado o Pasantia Internacional.">
    <meta name="keywords" content="Au Pair Colombia, Voluntariado Colombia, Pasantia Internacional, Viajes Internacionales, Aprendizaje Global, Experiencias Únicas, Intercambio Internacional, Noticias, Noticias Actuales, AHJ Noticias, Nuestros Aspirantes, Acompañamiento en programas, Cuidado de niños">
    <link rel="canonical" href="https://www.ahjcolombia.com/">
    <title>AHJ International, Vive tu Mejor Experiencia Educacional</title>
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <nav class="menu blue-bg <?php if ( is_page('home') ) echo "blue-bg-home"; ?>">
            <button class="burger"></button>
            <?php wp_nav_menu( array('theme_location' => 'primary_menu') ); ?>
        </nav>
        <div
            class="logo <?php if ( is_page('home')) echo "logo--white-angle"; ?> <?php if ( ! is_page('home') ) echo "logo--white-angle-no-opacity"; ?>">
            <a href="<?php echo bloginfo('wpurl'); ?>" class="logo__link">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_ahj.png" alt="Logo AHJ"
                    class="logo__img" />
            </a>
        </div>
        <?php if(is_page('home')): ?>
        <div id="Slider" class="slider">
            <?php if ( have_rows( 'slide_1' ) && get_field('slide_1')['imagen'] ) : ?>
            <?php while ( have_rows( 'slide_1' ) ) : the_row(); ?>
            <div class="slider__item slider__item--animated">
                <img src="<?php the_sub_field( 'imagen' ); ?>" alt="<?php the_sub_field( 'titulo' ); ?>"
                    class="slider__img">
                <div class="slider__blue-square"></div>
                <div class="slider__info-left">
                    <h2 class="slider__info-left_h2"><?php the_sub_field( 'titulo' ); ?></h2>
                    <a class="slider__info-left_button" href="<?php the_sub_field( 'archivo_pdf' ); ?>"
                        target="_blank"><?php the_sub_field( 'texto_boton' ); ?></a>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
            <?php if ( have_rows( 'slide_2' ) && get_field('slide_2')['imagen'] ) : ?>
            <?php while ( have_rows( 'slide_2' ) ) : the_row(); ?>
            <div class="slider__item slider__item--animated">
                <img src="<?php the_sub_field( 'imagen' ); ?>" alt="<?php the_sub_field( 'titulo' ); ?>"
                    class="slider__img">
                <div class="slider__blue-square"></div>
                <div class="slider__info-left">
                    <h2 class="slider__info-left_h2"><?php the_sub_field( 'titulo' ); ?></h2>
                    <a class="slider__info-left_button" href="<?php the_sub_field( 'archivo_pdf' ); ?>"
                        target="_blank"><?php the_sub_field( 'texto_boton' ); ?></a>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
            <?php if ( have_rows( 'slide_3' ) && get_field('slide_3')['imagen'] ) : ?>
            <?php while ( have_rows( 'slide_3' ) ) : the_row(); ?>
            <div class="slider__item slider__item--animated">
                <img src="<?php the_sub_field( 'imagen' ); ?>" alt="<?php the_sub_field( 'titulo' ); ?>"
                    class="slider__img">
                <div class="slider__blue-square"></div>
                <div class="slider__info-left">
                    <h2 class="slider__info-left_h2"><?php the_sub_field( 'titulo' ); ?></h2>
                    <a class="slider__info-left_button" href="<?php the_sub_field( 'archivo_pdf' ); ?>"
                        target="_blank"><?php the_sub_field( 'texto_boton' ); ?></a>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
            <?php if ( have_rows( 'slide_4' ) && get_field('slide_4')['imagen'] ) : ?>
            <?php while ( have_rows( 'slide_4' ) ) : the_row(); ?>
            <div class="slider__item slider__item--animated">
                <img src="<?php the_sub_field( 'imagen' ); ?>" alt="<?php the_sub_field( 'titulo' ); ?>"
                    class="slider__img">
                <div class="slider__blue-square"></div>
                <div class="slider__info-left">
                    <h2 class="slider__info-left_h2"><?php the_sub_field( 'titulo' ); ?></h2>
                    <a class="slider__info-left_button" href="<?php the_sub_field( 'archivo_pdf' ); ?>"
                        target="_blank"><?php the_sub_field( 'texto_boton' ); ?></a>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
            <?php if ( have_rows( 'slide_5' ) && get_field('slide_5')['imagen']) : ?>
            <?php while ( have_rows( 'slide_5' ) ) : the_row(); ?>
            <div class="slider__item slider__item--animated">
                <img src="<?php the_sub_field( 'imagen' ); ?>" alt="<?php the_sub_field( 'titulo' ); ?>"
                    class="slider__img">
                <div class="slider__blue-square"></div>
                <div class="slider__info-left">
                    <h2 class="slider__info-left_h2"><?php the_sub_field( 'titulo' ); ?></h2>
                    <a class="slider__info-left_button" href="<?php the_sub_field( 'archivo_pdf' ); ?>"
                        target="_blank"><?php the_sub_field( 'texto_boton' ); ?></a>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
            <div class="slider__buttons">
                <?php if ( have_rows( 'slide_1' ) && get_field('slide_1')['imagen'] ) : ?>
                <span class="slider__bullets"></span>
                <?php endif; ?>
                <?php if ( have_rows( 'slide_2' ) && get_field('slide_2')['imagen'] ) : ?>
                <span class="slider__bullets"></span>
                <?php endif; ?>
                <?php if ( have_rows( 'slide_3' ) && get_field('slide_3')['imagen'] ) : ?>
                <span class="slider__bullets"></span>
                <?php endif; ?>
                <?php if ( have_rows( 'slide_4' ) && get_field('slide_4')['imagen'] ) : ?>
                <span class="slider__bullets"></span>
                <?php endif; ?>
                <?php if ( have_rows( 'slide_5' ) && get_field('slide_5')['imagen'] ) : ?>
                <span class="slider__bullets"></span>
                <?php endif; ?>
            </div>
            <div class="slider__social-networks">
                <a href="<?php echo get_option('fb_link'); ?>" target="_blank" class="slider__social-networks-links">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/facebook_blue.png"
                        class="slider__social-networks-links-icons" alt="Facebook">
                </a>
                <a href="<?php echo get_option('insta_link'); ?>" target="_blank" class="slider__social-networks-links">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/instagram_blue.png"
                        class="slider__social-networks-links-icons" alt="Instagram">
                </a>
                <a href="https://api.whatsapp.com/send?phone=<?php echo get_option('whatsapp_number'); ?>"
                    target="_blank" class="slider__social-networks-links">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/whatsapp_blue.png"
                        class="slider__social-networks-links-icons" alt="Whatsapp">
                </a>
            </div>
        </div>
        <?php endif; ?>
    </header>