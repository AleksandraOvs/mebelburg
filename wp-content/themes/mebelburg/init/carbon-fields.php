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


            Field::make('complex', 'crb_header_contacts', 'Контакты')
                ->add_fields(array(
                    Field::make('text', 'crb_contact_name', 'Название')
                        ->set_width(33),
                    Field::make('image', 'crb_contact_image', 'Иконка контакта')
                        ->set_width(33),
                    Field::make('text', 'crb_contact_link', 'Ссылка контакта')
                        ->set_width(33),
                )),

            Field::make('text', 'crb_header_map', 'Заголовок')
                ->set_width(50),
            Field::make('image', 'crb_header_map_icon', 'Иконка')
                ->set_width(50),

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
                )),
        ));

    Container::make('theme_options', 'Первый экран')

        ->set_page_menu_position(2)
        ->set_icon('dashicons-admin-generic')
        ->add_fields( array (
            Field::make('complex', 'crb_hero_slider', 'Слайдер на первом экране')
                ->add_fields(array(
                    Field::make('rich_text', 'crb_hero_slider_header', 'Заголовок')
                        ->set_width(33),
                        Field::make('text', 'crb_hero_slider_link_more', 'Ссылка кнопки')
                        ->set_width(33),
                    Field::make('image', 'crb_hero_slider_image', 'Изображение слайда')
                        ->set_width(33)
                  
                ))
                ));      
}
