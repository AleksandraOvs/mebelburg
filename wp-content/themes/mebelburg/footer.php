<?php
/*
 * The template for displaying the footer
 */

?>




</main>



<footer id="footer" class="footer">
    <div class="container">
        <div class="footer__inner">
            <div class="footer__inner__col1">
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

            <div class="footer__inner__col2">
                <?php
                $main_menu = wp_nav_menu(
                    array(
                        'container' => 'div',
                        'menu_class' => 'footer-menu',
                    )
                );
                ?>
            </div>

            <div class="footer__inner__col3">
                <?php if ($address = carbon_get_theme_option('crb_address')) {
                    echo '<p class="footer-address">' . $address . '</p>';
                } ?>

                <?php if ($shed = carbon_get_theme_option('crb_header_shed')) {
                    echo '<p class="footer-address">' . $shed . '</p>';
                } ?>
            </div>
        </div>

        <div class="footer__inner__bottom">
            <?php
            if (is_active_sidebar('footer-widget')) {
            ?>
                <div class="footer__inner__bottom__widget">
                    <?php
                    dynamic_sidebar('footer-widget');
                    ?>
                </div>
            <?php
            };
            ?>

            <div class="footer__inner__bottom__messengers">
                <?php
                if ($crb_header_contacts = carbon_get_theme_option('crb_header_contacts')) {
                ?>

                    <?php
                    foreach ($crb_header_contacts as $crb_contact) {
                    ?>
                       
                            <a class="messenger__item" href="<?php echo $crb_contact['crb_contact_link'] ?>" class="contact-link">
                                <?php
                                if ($crb_contact_icon = $crb_contact['crb_contact_image']) {
                                    $contact_icon_url = wp_get_attachment_image_url($crb_contact['crb_contact_image'], 'full');
                                    echo '<img class="contact-link__img" src="' . $contact_icon_url . '" />';
                                }
                                ?>

                                <?php
                                if ($crb_contact_text = $crb_contact['crb_contact_name']) {
                                    echo '<span class="contact-link__name">' . $crb_contact_text . '" </span>';
                                }
                                ?>

                            </a>
                       
                    <?php
                    }
                    ?>



                <?php
                }
                ?>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>


</html>
</div><!-- /end of site-container -->