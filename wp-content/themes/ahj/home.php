<?php /*Template Name: Home*/ ?>
<?php get_header(); ?>
<?php global $wp_query; ?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <section class="home animated fadeIn">
            <div class="content">
                <h1 class="home__title">
                    <?php the_field('titulo_principal'); ?>
                </h1>
                <div class="home__experience-content">
                    <div class="home__experience-content-individual">
                    <?php the_field( 'video_izq_link' ); ?>
                        <h3 class="home__experience-content-individual-title">
                            <?php the_field( 'nombre_del_estudiante_izq' ); ?>
                        </h3>
                        <p class="home__experience-content-individual-txt">
                            <?php the_field( 'programa_izq' ); ?>
                        </p>
                    </div>
                    <div class="home__experience-content-individual">
                    <?php the_field( 'video_der_link' ); ?>
                        <h3 class="home__experience-content-individual-title">
                            <?php the_field( 'nombre_del_estudiante_der' ); ?>
                        </h3>
                        <p class="home__experience-content-individual-txt">
                            <?php the_field( 'programa_der' ); ?>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>