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
        ->show_on_template('page-scheme.php')
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
}
