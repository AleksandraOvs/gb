<?php
/*
 * The template for displaying the footer
 */

?>

</main>

<div id="callback-popup" style="display: none;">

    <?php
        if ($callback = carbon_get_theme_option('crb_contact_shortcode')){
            ?>
               <?php echo do_shortcode( $callback ); ?>
            <?php
        }else {
            echo '2';
        }
    ?>
</div>


<footer id="footer" class="footer">

    <div class="fixed-container">
        <div class="footer-left">
            <a href="<?php site_url(); ?>" class="footer__logo logo">
                <?php
                $footer_logo = get_theme_mod('footer_logo');
                $img = wp_get_attachment_image_src($footer_logo, 'full');
                if ($img) :
                ?>
                    <img src="<?php echo $img[0]; ?>" alt="">
                <?php endif; ?>
            </a>
        </div>
        <div class="footer-center">
            <?php
            $main_menu = wp_nav_menu(
                array(
                    'theme_location' => 'menu-header',
                    'container' => 'div',
                    'menu_class' => 'footer__menu',
                )
            );
            ?>
        </div>
        <div class="footer-right">

            <ul class="mobile__menu__messengers">

                <?php
                if ($contacts = carbon_get_theme_option('contacts')) {
                ?>

                    <?php
                    foreach ($contacts as $contact) {
                    ?>
                        <li class="social__item">
                            <a href="<?php echo $contact['crb_contact_link']; ?>" class="social__link">
                                <?php
                                $thumb_contact = wp_get_attachment_image_url($contact['crb_contact_image'], 'full');
                                ?>
                                <img class="social__img" width="25" height="25" src="<?php echo $thumb_contact; ?>" alt="<?php echo $contact['crb_contact_name']; ?>">
                                <span>
                                    <?php echo $contact['crb_contact_name']; ?>
                                </span>
                            </a>
                        </li>


                    <?php
                    }
                    ?>


                <?php
                }
                ?>
                <?php
                if ($address = carbon_get_theme_option('crb_address')) {
                ?>
                    <li class="social__item">
                        <?php
                        $address_thumb_url = wp_get_attachment_image_url($address_i = carbon_get_theme_option('crb_address_icon'), 'full');

                        ?>
                        <img class="social__img" width="25" height="25" src="<?php echo $address_thumb_url; ?>" alt="Адрес" />
                        <span>
                            <?php echo $address; ?>
                        </span>
                    </li>
                <?php
                }
                ?>
            </ul>

            <div class="footer__right__links">
                <a data-fancybox href="#callback-popup" class="button fill">Заказать звонок</a>
                <a class="footer__link" href="/">Вход для партнеров</a>
            </div>
        </div>


    </div>

    <div class="footer-bottom">
        <div class="fixed-container">
            <div class="footer-bottom__site-name">
                <span><?php echo the_time('Y') ?></span>&nbsp;|&nbsp;<span><?php bloginfo('name'); ?></span>
            </div>

            <a href="<?php echo site_url('privacy-policy') ?>" class="footer-bottom__link">Политика конфиденциальности</a>

            <p class="footer-bottom__about-company">
            ООО «Блазерс» ИНН 7892203688423
            </p>
        </div>

    </div>

</footer>
</div>
<!-- end of site-container -->
<?php wp_footer(); ?>

</body>


</html>
</div><!-- /end of site-container -->