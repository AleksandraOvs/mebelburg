<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;



add_action('carbon_fields_register_fields', 'site_carbon');
function site_carbon()
{

    Container::make('theme_options', 'Контакты')

        ->set_page_menu_position(2)
        ->set_icon('dashicons-admin-generic')
        ->add_tab(__('Контакты'), array(
            Field::make('text', 'crb_address', 'Адрес')
                ->set_width(50),
            Field::make('image', 'crb_address_icon', 'Иконка адреса')
                ->set_width(50),

            Field::make('complex', 'crb_messengers_contacts', 'Контакты')
                ->add_fields(array(
                    Field::make('text', 'crb_contact_name', 'Название')
                        ->set_width(33),
                    Field::make('image', 'crb_contact_image', 'Иконка контакта')
                        ->set_width(33),
                    Field::make('text', 'crb_contact_link', 'Ссылка контакта')
                        ->set_width(33),
                )),

            Field::make('text', 'crb_header_map', 'Заголовок')
                ->set_width(33),
            Field::make('image', 'crb_header_map_icon', 'Иконка')
                ->set_width(33),
            Field::make('text', 'crb_link_map', 'Ссылка')
                ->help_text('слаг страницы, например /contacts')
                ->set_width(33),
            Field::make('text', 'crb_header_shed', 'Часы работы')
                ->set_width(50),
            Field::make('image', 'crb_header_shed_icon', 'Иконка')
                ->set_width(50),
        ))

        ->add_tab(__('Мессенджеры'), array(
            Field::make('complex', 'messengers', 'Ссылки на мессенджеры')
                ->add_fields(array(

                    Field::make('text', 'crb_mes_name', 'Название')

                        ->set_width(33),

                    Field::make('text', 'crb_mes_link', 'Ссылка на контакт')

                        ->set_width(33),

                    Field::make('image', 'crb_mes_image', 'Иконка контакта')

                        ->set_width(33),
                ))
        ))

        ->add_tab(__('Формы обратной связи'), array(

            Field::make('text', 'crb_cf_rent', 'Контактная форма для страницы Аренда')
                ->help_text('вставьте шорткод для формы обратной связи в это поле')
                ->set_width(33),

            Field::make('text', 'crb_cf_adv', 'Контактная форма для страницы Реклама')
                ->help_text('вставьте шорткод для формы обратной связи в это поле')
                ->set_width(33),

        ))

        ->add_tab(__('Файлы'), array(

            Field::make("file", "crb_politics_file", "Файл политики (PDF)")
                ->set_value_type('url'), // сохранить в метаполе ссылку на файл

            Field::make("file", "crb_advertising_file", "Файл презентации для страницы Реклама (PDF)")
                ->set_value_type('url'), // сохранить в метаполе ссылку на файл

            Field::make("file", "crb_rent_file1", "Файл общей презентации для страницы Аренда (PDF)")
                ->set_value_type('url'), // сохранить в метаполе ссылку на файл
            Field::make("file", "crb_rent_file2", "Файл презентации по участку для страницы Аренда (PDF)")
                ->set_value_type('url'), // сохранить в метаполе ссылку на файл

        ));

    Container::make('theme_options', 'Первый экран')

        ->set_page_menu_position(2)
        ->set_icon('dashicons-admin-generic')
        ->add_tab(__('Главный слайдер'), array(
            Field::make('complex', 'crb_hero_slider', 'Слайдер на первом экране')
                ->add_fields(array(
                    // Field::make('rich_text', 'crb_hero_slider_header', 'Заголовок')
                    //     ->set_width(33),
                    Field::make('complex', 'crb_h2_lines', 'Строки для заголовка')
                        ->add_fields(array(
                            Field::make('text', 'crb_h2_line', 'Строка для заголовка')
                                ->set_width(33),
                        )),
                    Field::make('text', 'crb_hero_slider_link_more', 'Ссылка кнопки')
                        ->set_width(33),
                    Field::make('image', 'crb_hero_slider_image', 'Изображение слайда')
                        ->set_width(33)

                ))
        ))

        ->add_tab(__('Советы'), array(

            Field::make('complex', 'crb_advice_items', 'Советы от мишки Мё')
                ->add_fields(array(
                    Field::make('image', 'crb_advice_image', 'Изображение мишки Мё')
                        ->set_width(40),
                    Field::make('rich_text', 'crb_advice_text', 'Текст совета')
                        ->set_width(60)
                ))
        ));

    Container::make('post_meta', 'Информация о магазине')
        ->show_on_post_type('shops')
        ->add_fields(array(
            Field::make('image', 'crb_shop_item', 'Логотип')
                ->set_width(33),
            Field::make('text', 'crb_shop_item_name', 'Название')
                ->set_width(33),
            // Field::make('text', 'crb_shop_item_cat', 'Категория магазина')
            // ->set_width(25),
            Field::make('text', 'crb_shop_item_location', 'Этаж')
                ->set_width(33)
        ));

    Container::make('post_meta', 'Информация об акции')
        //->show_on_post_type('sales')
        ->show_on_category('sales')
        ->add_fields(array(
            //Field::make('image', 'crb_sale_img', 'Фото')
            //   ->set_width(33),
            Field::make('text', 'crb_sale_date', 'Дата акции')
                ->set_width(33),
            // Field::make('text', 'crb_shop_item_cat', 'Категория магазина')
            // ->set_width(25),
            Field::make('rich_text', 'crb_sale_desc', 'Подробности акции')
                ->set_width(33)
        ));

    Container::make('post_meta', 'Название')
        //->show_on_post_type('sales')
        ->show_on_category('awards')
        ->add_fields(array(

            Field::make('rich_text', 'crb_award_details', 'Краткое описание')
                ->set_width(100),
            Field::make('rich_text', 'crb_award_details1', 'Краткое описание (нижняя область)')
                ->set_width(100),
        ));

    Container::make('post_meta', 'Информация об организации')
        ->show_on_post_type('food')
        ->add_fields(array(
            Field::make('image', 'crb_food_logo', 'Логотип')
                ->set_width(33),
            Field::make('text', 'crb_food_title', 'Заголовок')
                ->set_width(33),
            Field::make('text', 'crb_food_description', 'Краткое описание')
                ->set_width(33),
            Field::make('complex', 'crb_food_icons', 'Иконки')
                ->add_fields(array(
                    Field::make('image', 'crb_food_icon', 'Иконка')
                        ->set_width(50),
                    Field::make('text', 'crb_food_icon_title', 'Подпись к иконке')
                        ->set_width(50)
                )),
            Field::make('rich_text', 'crb_food_shed', 'Время работы')
                ->help_text('слова в теге span открашиваются в #663780 (фиолетовый цвет)'),
            Field::make('text', 'crb_food_location', 'Местоположение')
        ));

    Container::make('post_meta', 'Страница Контакты')
        ->show_on_page('contacts')
        ->add_tab(__('Код карты'), array(

            Field::make('text', 'crb_contacts_map', 'Вставить код карты')
        ))

        ->add_tab(__('Блок Как добраться'), array(
            Field::make('complex', 'crb_contact_how', 'Блок')
            ->set_max(3)
            ->add_fields(array(
                Field::make('rich_text', 'crb_contact_how_block', 'NN')
            ))
        ))

        ->add_tab(__('Телефон'), array(
            Field::make('text', 'crb_contact_card_head1', 'Заголовок карточки')
                ->set_width(70),
            Field::make('image', 'crb_contacts_cards_icon1', 'Иконка')
                ->set_width(30),
            Field::make('complex', 'crb_contact_card_items1', 'Контакты')
                ->add_fields(array(
                    Field::make('text', 'crb_contacts_name1', 'Название контакта')
                        ->set_width(33),
                    Field::make('text', 'crb_contacts_text1', 'Текст ссылки')
                        ->set_width(33),
                    Field::make('text', 'crb_contacts_link1', 'Ссылка на телефон')
                        ->set_width(33),
                ))
        ))

        ->add_tab(__('E-mail'), array(
            Field::make('text', 'crb_contact_card_head2', 'Заголовок карточки')
                ->set_width(70),
            Field::make('image', 'crb_contacts_cards_icon2', 'Иконка')
                ->set_width(30),
            Field::make('complex', 'crb_contact_card_items2', 'Контакты')
                ->add_fields(array(
                    Field::make('text', 'crb_contacts_name2', 'Название контакта')
                        ->set_width(33),
                    Field::make('text', 'crb_contacts_text2', 'Текст ссылки')
                        ->set_width(33),
                    Field::make('text', 'crb_contacts_link2', 'Ссылка')
                        ->set_width(33),
                ))
        ))

        ->add_tab(__('Адрес'), array(
            Field::make('text', 'crb_contact_card_head3', 'Заголовок карточки')
                ->set_width(70),
            Field::make('image', 'crb_contacts_cards_icon3', 'Иконка')
                ->set_width(30),
            Field::make('complex', 'crb_contact_card_items3', 'Контакты')
                ->add_fields(array(
                    Field::make('text', 'crb_contacts_name3', 'Название контакта')
                        ->set_width(33),
                    Field::make('text', 'crb_contacts_text3', 'Текст ссылки')
                        ->set_width(33),
                    Field::make('text', 'crb_contacts_link3', 'Ссылка')
                        ->set_width(33),
                ))
        ))

        ->add_tab(__('Режим работы'), array(
            Field::make('rich_text', 'crb_contact_shed', 'Режим работы')
                ->help_text('слова в теге span открашиваются в #663780 (фиолетовый цвет)')
        ));

    Container::make('post_meta', 'Схемы и планы')
        ->show_on_template(array('page-scheme.php', 'page-imagemap.php', 'map.php'))
        ->add_tab(__('1 этаж'), array(
            Field::make('image', 'crb_scheme1f_img', 'Изображение 1 этажа'),
            Field::make('complex', 'crb_scheme1f_list', 'Расшифровка схемы')
                ->add_fields(array(
                    Field::make('text', 'crb_scheme1f_list_number', 'Подпись к цифре')
                        ->set_width(50),
                    Field::make('text', 'crb_scheme1f_list_desc', 'Подпись к цифре')
                        ->set_width(50),
                ))
        ))

        ->add_tab(__('2 этаж'), array(
            Field::make('image', 'crb_scheme2f_img', 'Изображение 2 этажа'),
            Field::make('complex', 'crb_scheme2f_list', 'Расшифровка схемы')
                ->add_fields(array(
                    Field::make('text', 'crb_scheme2f_list_number', 'Подпись к цифре')
                        ->set_width(50),
                    Field::make('text', 'crb_scheme2f_list_desc', 'Подпись к цифре')
                        ->set_width(50),
                ))
        ))

        ->add_tab(__('3 этаж'), array(
            Field::make('image', 'crb_scheme3f_img', 'Изображение 3 этажа'),
            Field::make('complex', 'crb_scheme3f_list', 'Расшифровка схемы')
                ->add_fields(array(
                    Field::make('text', 'crb_scheme3f_list_number', 'Подпись к цифре')
                        ->set_width(50),
                    Field::make('text', 'crb_scheme3f_list_desc', 'Подпись к цифре')
                        ->set_width(50),
                ))
        ))

        ->add_tab(__('Слайды с image-map'), array(
            Field::make('text', 'crb_imagemap1_shortcode', 'Шорткод для первого этажа')
                ->set_width(30),
            Field::make('text', 'crb_imagemap2_shortcode', 'Шорткод для второго этажа')
                ->set_width(30),
            Field::make('text', 'crb_imagemap3_shortcode', 'Шорткод для третьего этажа')
                ->set_width(30),

        ));

    Container::make('post_meta', 'Схемы и планы')
        ->show_on_template('page-plan.php')
        ->add_tab(__('План земельного участка'), array(
            Field::make('image', 'crb_plan_img', 'Изображение 1 слайда'),
            Field::make('rich_text', 'crb_plan_list_description', 'Описание')
                ->set_width(30),
            Field::make('complex', 'crb_plan_list', 'Расшифровка схемы')
                ->add_fields(array(
                    Field::make('text', 'crb_plan_list_number', 'Подпись к цифре')
                        ->set_width(50),
                    Field::make('text', 'crb_plan_list_desc', 'Подпись к цифре')
                        ->set_width(50)
                ))
        ));

    Container::make('post_meta', 'Контент для страницы Лояльности')
        ->show_on_template('page-loyalty.php')
        ->add_tab(__('Логотипы партнёров'), array(
            Field::make('complex', 'crb_loyalty_partners', 'Лого партнёров')
                ->add_fields(array(
                    Field::make('image', 'crb_partner_logo', 'Логотип')
                        ->set_width(50),
                    Field::make('text', 'crb_partner_logo_alt', 'Alt лого')
                        ->set_width(50)
                )),
        ))

        ->add_tab(__('Форма обратной связи'), array(
            Field::make('text', 'crb_cf_loyalty', 'Контактная форма для страницы Лояльности')
                ->help_text('вставьте шорткод для формы обратной связи в это поле')
                ->set_width(33),
        ));

    Container::make('post_meta', 'Контент для личного кабинета')
        ->show_on_template('page-lk.php', 'page-dashboard.php')
        ->add_tab(__('Информация для не добавленных пользователей'), array(
            Field::make('rich_text', 'crb_wait_member_message', 'Текст сообщения')
        ))

        ->add_tab(__('Промокод на коворкинг'), array(
            Field::make('text', 'crb_dashbord_promocode', 'Заголовок'),
        ))

        ->add_tab(__('Карточки акций'), array(
            Field::make('complex', 'crb_sale_for_members', 'Предложения')
                ->add_fields(array(
                    Field::make('text', 'crb_sfm_brand', 'Название магазина'),
                    Field::make('text', 'crb_sfm_brand_num', 'Номер секции'),
                    Field::make('rich_text', 'crb_sfm_text', 'Описание предложения'),
                ))
        ))

        ->add_tab(__('Контактная форма'), array(
            Field::make('text', 'crb_dashbord_form_head', 'Заголовок формы'),
            Field::make('text', 'crb_dashbord_form_desc', 'Подзаголовок формы'),
            Field::make('text', 'crb_dashbord_form', 'Шорткод формы'),
        ));

    Container::make('post_meta', 'Контент для страницы Лекторий-Коворкинг')
        ->show_on_page('lecture-coworking')
        ->add_tab(__('Общая информация - абзацы'), array(
            Field::make('complex', 'crb_text_fragments', 'Абзацы')
                ->add_fields(array(
                    Field::make('text', 'crb_text_fragment_head', 'Заголовок абзаца'),
                    Field::make('rich_text', 'crb_text_fragment', 'Текст'),
                ))
        ))

        ->add_tab(__('Слайдер на странице'), array(
            Field::make('complex', 'crb_lec_slides', 'Слайды')
                ->add_fields(array(
                    Field::make('image', 'crb_lec_image', 'Изображение для слайда'),
                ))
        ))

        ->add_tab(__('Услуги'), array(
            Field::make('rich_text', 'crb_lec_services_description', 'Описание'),
            Field::make('complex', 'crb_lec_services', 'Список услуг лектория/коворкинга')
                ->add_fields(array(
                    Field::make('text', 'crb_lec_services_head', 'Заголовоык'),
                    Field::make('complex', 'crb_lec_services_items', 'Услуга')
                        ->add_fields(array(
                            Field::make('text', 'crb_lec_services_name', 'Название услуги')
                                ->set_width(33),
                            Field::make('text', 'crb_lec_services_price', 'Цена')
                                ->set_width(33),
                            Field::make('rich_text', 'crb_lec_services_desc', 'Пояснение')
                                ->set_width(33),
                        ))
                )),

        ))

        ->add_tab(__('Контакты'), array(
            Field::make('complex', 'crb_lec_contacts', 'Конактные данные для страницы')
                ->add_fields(array(
                    Field::make('text', 'crb_lec_contact_name', 'Заголовок контакта')
                        ->set_width(33),
                    Field::make('text', 'crb_lec_contact', 'Текст контакта')
                        ->set_width(33),
                    Field::make('text', 'crb_lec_contact_link', 'Ссылка контакта')
                        ->set_width(33),
                    Field::make('rich_text', 'crb_lec_contact_desc', 'Пояснение')
                        ->set_width(33),
                )),

        ))

        ->add_tab(__('Форма обратной связи'), array(
            Field::make('text', 'crb_cf_form_heading', 'Заголовок формы'),
            Field::make('rich_text', 'crb_cf_form_description', 'Краткое описание формы'),
            Field::make('text', 'crb_cf_form_shortcode', 'Контактная форма для страницы')
                ->help_text('вставьте шорткод для формы обратной связи в это поле')
                ->set_width(33),
        ));
}
