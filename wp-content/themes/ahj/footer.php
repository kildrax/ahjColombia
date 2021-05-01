<footer class="footer--bg">
    <div class="footer content">
        <div class="footer__content">
            <?php wp_nav_menu( array('theme_location' => 'footer_menu', 'menu_class' => 'footer__content-links-ul') ); ?>
        </div>
        <div class="footer__content">
            <span class="footer__content_txt--style">Dirección: <br /><?php echo get_option('direccion_ahj'); ?></span>
            <span class="footer__content_txt--style"><?php echo get_option('barrio_ahj'); ?></span>
            <span class="footer__content_txt--style"><?php echo get_option('ciudad_ahj'); ?></span>
            <span class="footer__content_txt--style"><?php echo get_option('pais_ahj'); ?></span>
        </div>
        <div class="footer__content">
            <span class="footer__content_txt--style">Correo: <br />
                <a href="mailto:<?php echo get_option('correo_ahj'); ?>"
                    class="footer__content_txt--style"><?php echo get_option('correo_ahj'); ?></a>
            </span>
            <span class="footer__content_txt--style">Celular: <br />
                <a href="tel:<?php echo get_option('celular_ahj'); ?>" class="footer__content_txt--style"><?php echo get_option('celular_ahj'); ?></a>
            </span>
            <span class="footer__content_txt--style">Fijo: <br />
                <a href="tel:038<?php echo get_option('fijo_ahj'); ?>" class="footer__content_txt--style"><?php echo get_option('fijo_ahj'); ?></a>
            </span>
        </div>
        <div class="footer__content">
            <a href="<?php echo get_option('fb_link'); ?>" target="_blank" class="footer__content_social_network">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/facebook_icon.png"
                    class="footer__content_social_network-img" alt="Facebook">
            </a>
            <a href="<?php echo get_option('insta_link'); ?>" target="_blank" class="footer__content_social_network">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/instagram.png"
                    class="footer__content_social_network-img" alt="Instagram">
            </a>
            <a href="https://api.whatsapp.com/send?phone=<?php echo get_option('whatsapp_number'); ?>" target="_blank"
                class="footer__content_social_network">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/whatsapp.png"
                    class="footer__content_social_network-img" alt="Whatsapp">
            </a>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>