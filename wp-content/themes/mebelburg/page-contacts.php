<?php

/**
 * Template name: Страница Контакты
 */
get_header() ?>

<section class="page-section _page-contacts" style="padding-top: 150px;">
    <div class="container">
        <div class="page-section__header">
            <ul class="breadcrumbs__list">
                <?php echo site_breadcrumbs(); ?>
            </ul>

            <div class="page-section__title">
                <h2><span class="bold">Как добраться</span> в&nbsp;«МÖБЕЛЬБУРГ»</h2>
            </div>
        </div>

        <div class="page-section__content _page-contacts__content">
            <?php
            if ($map_code = carbon_get_post_meta(get_the_ID(), 'crb_contacts_map')) {
            ?>
                <div class="page-contacts__map">
                    <?php echo $map_code; ?>

                </div>
            <?php
            }

            ?>
        </div>


        <ul class="page-contacts__contact-cards">


            
                <li class="page-contacts__item">
                    <div class="page-contacts__item__head">
                        <div class="pci_heading"><?php echo carbon_get_post_meta(get_the_ID(), 'crb_contact_card_head1') ?></div>
                        <div class="pci_icon">
                            <?php
                            if ($pci_icon = carbon_get_post_meta(get_the_ID(), 'crb_contacts_cards_icon1')) {
                                $cc_icon_url = wp_get_attachment_image_url($pci_icon, 'full');
                                echo '<img class="contact-card__icon__img" src="' . $cc_icon_url . '" />';
                            }
                            ?>
                        </div>
                    </div>

                    <div class="page-contacts__item__content">
                        <?php
                        if ($contacts_items1 = carbon_get_post_meta(get_the_ID(), 'crb_contact_card_items1')) {
                            foreach ($contacts_items1 as $contacts_item1) {
                        ?>
                                <div class="item-contact">
                                    <?php echo $contacts_item1['crb_contacts_name1'] ?>
                                </div>

                                <div class="item-contact__link">
                                    <a href="<?php echo $contacts_item1['crb_contacts_link1'] ?>">
                                        <?php echo $contacts_item1['crb_contacts_text1'] ?>
                                    </a>
                                </div>

                        <?php
                            }
                        }
                        ?>
                    </div>
                </li>

                <li class="page-contacts__item">
                    <div class="page-contacts__item__head">
                        <div class="pci_heading"><?php echo carbon_get_post_meta(get_the_ID(), 'crb_contact_card_head2') ?></div>
                        <div class="pci_icon">
                            <?php
                            if ($pci_icon1 = carbon_get_post_meta(get_the_ID(), 'crb_contacts_cards_icon2')) {
                                $cc_icon_url1 = wp_get_attachment_image_url($pci_icon1, 'full');
                                echo '<img class="contact-card__icon__img" src="' . $cc_icon_url1 . '" />';
                            }
                            ?>
                        </div>
                    </div>

                    <div class="page-contacts__item__content">
                        <?php
                        if ($contacts_items2 = carbon_get_post_meta(get_the_ID(), 'crb_contact_card_items2')) {
                            foreach ($contacts_items2 as $contacts_item2) {
                        ?>
                        <div class="item-inner">
                              <div class="item-contact">
                                    <?php echo $contacts_item2['crb_contacts_name2'] ?>
                                </div>

                                <div class="item-contact__link">
                                    <a href="<?php echo $contacts_item2['crb_contacts_link2'] ?>">
                                        <?php echo $contacts_item2['crb_contacts_text2'] ?>
                                    </a>
                                </div>
                        </div>
                              

                        <?php
                            }
                        }
                        ?>
                    </div>
                </li>

                <li class="page-contacts__item">
                    <div class="page-contacts__item__head">
                        <div class="pci_heading"><?php echo carbon_get_post_meta(get_the_ID(), 'crb_contact_card_head3') ?></div>
                        <div class="pci_icon">
                            <?php
                            if ($pci_icon2 = carbon_get_post_meta(get_the_ID(), 'crb_contacts_cards_icon3')) {
                                $cc_icon_url2 = wp_get_attachment_image_url($pci_icon2, 'full');
                                echo '<img class="contact-card__icon__img" src="' . $cc_icon_url2 . '" />';
                            }
                            ?>
                        </div>
                    </div>

                    <div class="page-contacts__item__content">
                        <?php
                        if ($contacts_items3 = carbon_get_post_meta(get_the_ID(), 'crb_contact_card_items3')) {
                            foreach ($contacts_items3 as $contacts_item3) {
                        ?>
                        <div class="item-inner">
                              <div class="item-contact">
                                    <?php echo $contacts_item3['crb_contacts_name3'] ?>
                                </div>

                                <div class="item-contact__link">
                                    <a href="<?php echo $contacts_item3['crb_contacts_link3'] ?>">
                                        <?php echo $contacts_item3['crb_contacts_text3'] ?>
                                    </a>
                                </div>
                        </div>
                              

                        <?php
                            }
                        }
                        ?>
                    </div>
                </li>
        </ul>

        <div class="page-contacts__schedule">
            <?php
                if ($shedule = carbon_get_post_meta(get_the_ID(), 'crb_contact_shed')){
                    echo $shedule;
                }
            ?>
        </div>
 </div>
 
        <div class="subscribe-us">
            <div class="container">
                <div class="subscribe-us__description">
                Как оставаться в&nbsp;курсе последних событий и акций?
                </div>

                <h3 class="subscribe-us__title">
                Подписывайтесь на&nbsp;наши сообщества
                </h3>

               <?php
                if ($crb_contacts = carbon_get_theme_option('crb_messengers_contacts')) {
                ?>
                <ul class="contact-page__messengers">
                

                    <?php
                    foreach ($crb_contacts as $crb_contact) {
                    ?>
                        <li class="contact-page__messengers__item">
                            <a class="messenger__item" href="<?php echo $crb_contact['crb_contact_link'] ?>" class="contact-link">
                                <?php
                                if ($crb_contact_icon = $crb_contact['crb_contact_image']) {
                                    $contact_icon_url = wp_get_attachment_image_url($crb_contact['crb_contact_image'], 'full');
                                    echo '<img class="contact-link__img" src="' . $contact_icon_url . '" alt="Подпишитесь на наши сообщества" />';
                                }
                                ?>

                            </a>
                        </li>

                    <?php
                    }
                    ?>
               
            </ul>
 <?php
                }
                ?>
            </div>
        </div>





   
</section>

<?php get_footer() ?>