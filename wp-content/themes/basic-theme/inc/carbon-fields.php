<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'carbon_fields');
function carbon_fields()
{

    Container::make('theme_options', 'Контакты')

        ->set_page_menu_position(2)
        ->set_icon('dashicons-admin-generic')
        ->add_tab(__('Контакты'), array(
            // Field::make('text', 'crb_phone', 'Номер телефона')
            // ->set_width(50),
            // Field::make('text', 'crb_phone_link', 'Ссылка на номер')
            // ->help_text('ссылка на номер вида tel:8800808080')
            // ->set_width(50),
            Field::make('text', 'crb_address', 'Адрес')
                ->set_width(50),
            Field::make('image', 'crb_address_icon', 'Иконка адреса')
                ->set_width(50),
            Field::make('complex', 'contacts', 'Контакты')
                ->add_fields(array(
                    Field::make('text', 'crb_contact_name', 'Название')
                        ->set_width(33),
                    Field::make('image', 'crb_contact_image', 'Иконка контакта')
                        ->set_width(33),
                    Field::make('text', 'crb_contact_link', 'Ссылка контакта')
                        ->set_width(33),
                )),


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
        ->set_icon('dashicons-cover-image')
        ->add_fields(array(

            Field::make('rich_text', 'crb_hero-head', 'Первый заголовок')
                ->set_width(40),
            Field::make('rich_text', 'crb_hero-description', 'Текст под заголовком')
                ->set_width(40),
            Field::make('text', 'crb_hero_button', 'Название кнопки')
                ->set_width(50),
            Field::make('text', 'crb_button_link', 'Ссылка кнопки')
                ->set_width(50),
            Field::make('text', 'crb_hero-slider_head', 'Заголовок слайдера')
                ->set_width(50),
            Field::make('complex', 'hero-slides', 'Слайдер на главном экране')
                ->add_fields(array(
                    Field::make('image', 'crb_hero-image', 'Изображение')
                        ->set_width(20),
                ))
        ));


    Container::make('theme_options', 'Отзывы')

        ->set_page_menu_position(2)
        ->set_icon('dashicons-format-status')
        ->add_fields(array(
            Field::make('complex', 'crb_feedback', 'Отзывы')
                ->add_fields(array(
                    Field::make('text', 'crb_fb_name', 'Имя клиента')
                        ->set_width(15),
                    Field::make('text', 'crb_fb_date', 'Дата отзыва')
                        ->set_width(15),
                    Field::make('rich_text', 'crb_fb_text', 'текст отзыва')
                        ->set_width(70)
                )),

        ));

    Container::make('theme_options', 'Popup окна')

        ->set_page_menu_position(2)
        ->set_icon('dashicons-admin-page')

        // Field::make('complex', 'crb_popups', 'Попапы')
        ->add_tab(__('Форма Обратный звонок'), array(

            Field::make('text', 'crb_contact_shortcode', 'Шорткод из CF7')
                ->set_width(33),

        ))

        ->add_tab(__('Купить книгу'), array(

            Field::make('text', 'crb_buybook_head', 'Заголовок окна')
                ->set_width(33),
            Field::make('rich_text', 'crb_buybook_desc', 'Описание')
                ->set_width(33),
            Field::make('rich_text', 'crb_buybook_code', 'html code / shortcode')
                ->set_width(33),
        ));
}
