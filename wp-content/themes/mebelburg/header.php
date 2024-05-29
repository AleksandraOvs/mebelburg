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

            <a href="/" class="header__inner__logo">
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
                <span>Меню</span>
                <svg width="8" height="7" viewBox="0 0 8 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.25364 3.49963L7.0997 0.749452C7.18477 0.66712 7.23256 0.555454 7.23256 0.439019C7.23256 0.322584 7.18477 0.210918 7.0997 0.128586C7.01464 0.0462537 6.89926 0 6.77896 0C6.65865 0 6.54328 0.0462537 6.45821 0.128586L3.61667 2.88313L0.775122 0.128586C0.690055 0.0462537 0.574679 1.03376e-07 0.454375 1.04244e-07C0.334072 1.05111e-07 0.218696 0.0462537 0.133629 0.128586C0.0485613 0.210918 0.000771075 0.322584 0.000771074 0.439019C0.000771074 0.555454 0.0485613 0.66712 0.133629 0.749452L2.97969 3.49963L0.133629 6.2498C0.0912863 6.29045 0.0576783 6.33881 0.0347433 6.39209C0.0118082 6.44537 0 6.50252 0 6.56024C0 6.61795 0.0118082 6.6751 0.0347433 6.72838C0.0576783 6.78166 0.0912863 6.83002 0.133629 6.87067C0.175625 6.91165 0.22559 6.94418 0.280641 6.96637C0.335691 6.98857 0.394738 7 0.454375 7C0.514013 7 0.57306 6.98857 0.62811 6.96637C0.683161 6.94418 0.733125 6.91165 0.775122 6.87067L3.61667 4.11612L6.45821 6.87067C6.50021 6.91165 6.55017 6.94418 6.60522 6.96637C6.66027 6.98857 6.71932 7 6.77896 7C6.83859 7 6.89764 6.98857 6.95269 6.96637C7.00774 6.94418 7.05771 6.91165 7.0997 6.87067C7.14205 6.83002 7.17566 6.78166 7.19859 6.72838C7.22153 6.6751 7.23333 6.61795 7.23333 6.56024C7.23333 6.50252 7.22153 6.44537 7.19859 6.39209C7.17566 6.33881 7.14205 6.29045 7.0997 6.2498L4.25364 3.49963Z" fill="#fff" />
                </svg>

            </a>

        </div>
    </div>
    </header>