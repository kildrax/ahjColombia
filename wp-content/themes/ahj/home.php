<?php /*Template Name: Home*/ ?>
<?php get_header(); ?>
<?php global $wp_query; ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<main class="home">
    <section class="home home-ahj animated fadeIn">
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
    <div class="home__textsExperience">
        <p><?php the_field( 'texto_ahj_international' ); ?></p>
    </div>
    <section class="home-granChef">
        <h2 class="home__title home-granChef_title"><?php the_field( 'titulo_principal_dos' ); ?></h2>
        <div class="home__experience-content">
            <div class="home__experience-content-individual biggerVideo">
                <?php the_field( 'video_izq_link_gran_chef' ); ?>
                <div class="home__experience-content-individual-txt">
                    <?php the_field( 'textos_videos_gran_chef_izq' ); ?>
                </div>
            </div>
            <!-- <?php if(the_field( 'video_der_link_gran_chef' )): ?>
            <div class="home__experience-content-individual">
                <?php the_field( 'video_der_link_gran_chef' ); ?>
                <div class="home__experience-content-individual-txt">
                    <?php the_field( 'textos_videos_gran_chef_der' ); ?>
                </div>
            </div>
            <?php endif; ?> -->
        </div>
    </section>
    <div class="home__textsExperience">
        <p><?php the_field( 'texto_gran_chef' ); ?></p>
    </div>
</main>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>