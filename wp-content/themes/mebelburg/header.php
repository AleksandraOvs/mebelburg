<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <title><?php echo wp_get_document_title() ?></title>

    <meta charset="<?php bloginfo('chrset') ?>">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">

    <link type="image/x-icon" href="<?php echo get_stylesheet_directory_uri() . '/images/favicon.ico' ?>" rel="shortcut icon">
    <link type="Image/x-icon" href="<?php echo get_stylesheet_directory_uri() . '/images/favicon.ico' ?>" rel="icon">

    <?php wp_head() ?>
</head>

<body class="relative">

    <!-- Preloader -->
    <div class="loader-mask">
        <div class="loader">
            <div></div>
            <div></div>
        </div>
    </div>

    <div class="main-wrapper">


        <header class="header">
            <div class="header__top">
                <div class="container">
                    <div class="header__top__address">
                        <?php
                        if ($address = carbon_get_theme_option('crb_address')) {
                            echo '<div class="address">';
                            if ($address_icons = carbon_get_theme_option('crb_address_icon')) {
                                $address_icon = wp_get_attachment_image_url($address_icons, 'full');
                                echo '<img class="address__img" width="25" height="25" src="' .  $address_icon . '" alt="">';
                            }
                            echo '<p class="address">' . $address . '</p>';
                        }
                        ?>

                        <?php  /* Панель входа на сайт */
                        global $user_ID, $user_identity;
                        wp_get_current_user();
                        if (!$user_ID):
                        ?>
                            <div class="loyalty-link">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/images/svg/user.svg" alt="">
                                <a class="header__top__link" href="/loyalty">Программа лояльности</a>
                            </div>
                        <?php else: ?>
                            <div class="loyalty-link">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/images/svg/user.svg" alt="">
                                <span>Привет,&nbsp;</span><a class="header__top__link" href="/account"><?php _e(' '); ?><?php echo $user_identity; ?> !
                                </a><a class="logout_link" href="<?php echo wp_logout_url(); ?>" title="Выход">
                                    <svg width="39" height="40" viewBox="0 0 39 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18.2812 37.0625H2.43753V2.93755H18.2812C18.954 2.93755 19.4999 2.39151 19.4999 1.71884C19.4999 1.04616 18.9539 0.500122 18.2812 0.500122H1.21872C0.546041 0.500122 0 1.04606 0 1.71884V38.2812C0 38.954 0.546041 39.4999 1.21872 39.4999H18.2811C18.9539 39.4999 19.4998 38.9539 19.4998 38.2812C19.4999 37.6084 18.9539 37.0625 18.2812 37.0625Z" fill="#BF994C" />
                                        <path d="M38.6466 19.1493L30.2373 10.6193C29.7608 10.1379 28.9893 10.1391 28.514 10.6193C28.0374 11.0995 28.0374 11.8794 28.514 12.3596L34.8515 18.7885H9.75387C9.0811 18.7885 8.53516 19.3394 8.53516 20.0195C8.53516 20.6995 9.0812 21.2505 9.75387 21.2505H34.8515L28.514 27.6794C28.0374 28.1608 28.0374 28.9395 28.514 29.4197C28.9905 29.9011 29.762 29.9011 30.2373 29.4197L38.6454 20.8897C39.1159 20.4156 39.1208 19.6222 38.6466 19.1493Z" fill="#BF994C" />
                                    </svg>

                                </a>
                            </div>

                        <?php endif; ?>
                    </div>
                    <!-- <div class="loyalty-link">
                    <img src="<?php //echo get_stylesheet_directory_uri() 
                                ?>/images/svg/user.svg" alt="">
                    <a class="header__top__link" href="/loyalty">Программа лояльности</a>
                </div> -->


                    <ul class="header__top__messengers">
                        <?php
                        if ($crb_header_contacts = carbon_get_theme_option('crb_messengers_contacts')) {
                        ?>

                            <?php
                            foreach ($crb_header_contacts as $crb_contact) {
                            ?>
                                <li class="header__top__messengers__item">
                                    <a class="messenger__item" href="<?php echo $crb_contact['crb_contact_link'] ?>" class="contact-link">
                                        <?php
                                        if ($crb_contact_icon = $crb_contact['crb_contact_image']) {
                                            $contact_icon_url = wp_get_attachment_image_url($crb_contact['crb_contact_image'], 'full');
                                            echo '<img class="contact-link__img" src="' . $contact_icon_url . '" />';
                                        }
                                        ?>

                                    </a>
                                </li>

                            <?php
                            }
                            ?>



                        <?php
                        }
                        ?>
                        <?php
                        if (carbon_get_theme_option('crb_header_map') && $crb_map_icon = carbon_get_theme_option('crb_header_map_icon')) {
                            $crb_map_icon_url = wp_get_attachment_image_url($crb_map_icon, 'full');
                            $crb_map_link = carbon_get_theme_option('crb_link_map');

                            echo '<li class="header__top__messengers__item"><img src="' . $crb_map_icon_url . '" />';
                        ?>
                            <a href=" <?php if ($crb_map_link) {
                                            echo site_url($crb_map_link);
                                        } ?>" class="contact-link__name"><?php echo carbon_get_theme_option('crb_header_map') ?> </a></li>
                        <?php
                        }
                        ?>
                        <?php
                        if (carbon_get_theme_option('crb_header_shed') && $crb_shed_icon = carbon_get_theme_option('crb_header_shed_icon')) {
                            $crb_shed_icon_url = wp_get_attachment_image_url($crb_shed_icon, 'full');

                            echo '<li class="header__top__messengers__item"><img src="' . $crb_shed_icon_url . '" />

                                    <span class="contact-link__name">' . carbon_get_theme_option('crb_header_shed') . '</li>';
                        }
                        ?>


                    </ul>
                </div>
            </div>

    </div>
    <div class="header__inner">
        <div class="container">

            <a href="/" class="header__inner__logo">
                <?php
                $header_logo = get_theme_mod('header_logo');
                $img = wp_get_attachment_image_src($header_logo, 'full');
                if ($img) : echo '<img src="' . $img[0] . '" alt="">';
                endif;
                ?>
            </a>

            <a href="/" class="header__inner__logo_mob">
                <?php
                $header_logo = get_theme_mod('header_logo');
                $img = wp_get_attachment_image_src($header_logo, 'full');
                if ($img) : echo '<img src="' . $img[0] . '" alt="">';
                endif;
                ?>
            </a>



            <?php
            $main_menu = wp_nav_menu(
                array(
                    'container' => 'nav',
                    'menu_class' => 'main-menu',
                )
            );
            ?>

            <a class="header__inner__burger">
                <span></span>

            </a>

        </div>
    </div>
    </header>