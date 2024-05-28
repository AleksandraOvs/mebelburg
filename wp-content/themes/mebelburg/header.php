<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <title><?php echo wp_get_document_title() ?></title>

    <meta charset="<?php bloginfo('chrset') ?>">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">

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
                    </div>

                    <ul class="header__top__messengers">
                        <?php
                        if ($crb_header_contacts = carbon_get_theme_option('crb_header_contacts')) {
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

                                        <?php
                                        if ($crb_contact_text = $crb_contact['crb_contact_name']) {
                                            echo '<span class="contact-link__name">' . $crb_contact_text . '" </span>';
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

                            echo '<li class="header__top__messengers__item"><img src="' . $crb_map_icon_url . '" />

                                    <span class="contact-link__name">' . carbon_get_theme_option('crb_header_map') . '</li>';
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
            <ul class="header__inner__menu1">
                <li class="menu-item">
                    <a href="/">Магазины</a>
                </li>
                <li class="menu-item">
                    <a href="/">Еда</a>
                </li>
                <li class="menu-item">
                    <a href="/">Развлечения</a>
                </li>
                <li class="menu-item">
                    <a href="/">Схема центра</a>
                </li>
                <li class="menu-item">
                    <a href="/">Акции</a>
                </li>
                <li class="menu-item">
                    <a href="/">Новости</a>
                </li>
            </ul>
            <a href="/" class="header__inner__logo">
                <?php
                $header_logo = get_theme_mod('header_logo');
                $img = wp_get_attachment_image_src($header_logo, 'full');
                if ($img) : echo '<img src="' . $img[0] . '" alt="">';
                endif;
                ?>
            </a>

            <ul class="header__inner__menu2">
            <li class="menu-item">
                    <a href="/">Мероприятия</a>
                </li>
                <li class="menu-item">
                    <a href="/">Календарь</a>
                </li>
                <li class="menu-item">
                    <a href="/">Аренда</a>
                </li>
                <li class="menu-item">
                    <a href="/">Реклама в ИВЦ</a>
                </li>
                <li class="menu-item">
                    <a href="/">Контакты</a>
                </li>
            </ul>

            <?php
            // $main_menu = wp_nav_menu(
            //     array(
            //         'container' => 'nav',
            //         'menu_class' => 'main-menu',
            //     )
            // );
            ?>

        </div>
    </div>
    </header>