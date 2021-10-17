<?php

return [
    'menu' => 'Контакты',
    'edit' => 'Просмотр контакта',
    'tables' => [
        'phone' => 'Телефон',
        'email' => 'Email',
        'full_name' => 'Полное имя',
        'time' => 'Время',
        'address' => 'Адрес',
        'subject' => 'Тема',
        'content' => 'Содержимое',
    ],
    'contact_information' => 'Контактная информация',
    'replies' => 'Ответы',
    'email' => [
        'header' => 'Email',
        'title' => 'Новый контакт с вашего сайта',
    ],
    'form' => [
        'name' => [
            'required' => 'Укажите имя!',
        ],
        'email' => [
            'required' => 'Email является обязательным к заполнению!',
            'email' => 'Email введен неверно!',
        ],
        'content' => [
            'required' => 'Сообщение обязательно!',
        ],
    ],
    'contact_sent_from' => 'Эта контактная информация, отправленная с',
    'sender' => 'Отправитель',
    'sender_email' => 'Email',
    'sender_address' => 'Адрес',
    'sender_phone' => 'Телефон',
    'message_content' => 'Сообщение',
    'sent_from' => 'Email sent from',
    'form_name' => 'Имя',
    'form_email' => 'Email',
    'form_address' => 'Адрес',
    'form_subject' => 'Тема',
    'form_phone' => 'Телефон',
    'form_message' => 'Сообщение',
    'required_field' => 'Поля с (<span style="color: red">*</span>) являются обязательными к заполнению',
    'send_btn' => 'Отправить',
    'new_msg_notice' => 'У вас <span class="bold">:count</span> новых сообщений',
    'view_all' => 'Просмотреть все',
    'statuses' => [
        'read' => 'Прочитано',
        'unread' => 'Непрочитано',
    ],
    'phone' => 'Телефон',
    'address' => 'Адрес',
    'message' => 'Сообщение',
    'settings' => [
        'email' => [
            'title' => 'Контакт',
            'description' => 'Настройка Email',
            'templates' => [
                'notice_title' => 'Отправить уведомление администратору',
                'notice_description' => 'Шаблон электронной почты для отправки уведомления администратору, когда система получит новое сообщение',
            ],
        ],
    ],
    'no_reply' => 'Пока нет ответа!',
    'reply' => 'Ответ',
    'send' => 'Отправить',
    'shortcode_name' => 'Обратная связь',
    'shortcode_description' => 'Добавить форму обратной связи',
    'shortcode_content_description' => 'Добавить шорткод  [contact-form][/contact-form] в редактор?',
    'message_sent_success' => 'Сообщение отправлено!',
];
