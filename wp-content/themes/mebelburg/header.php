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

                        <a class="header__top__link" href="/loyalty">Программа лояльности</a>
                    </div>

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