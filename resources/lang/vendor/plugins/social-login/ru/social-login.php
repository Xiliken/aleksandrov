<?php

return [
    'settings' => [
        'title' => 'Social Login settings',
        'description' => 'Настроить параметры входа через соц.сети',
        'facebook' => [
            'title' => 'Facebook login settings',
            'description' => 'Enable/disable & configure app credentials for Facebook login',
            'app_id' => 'ID приложения',
            'app_secret' => 'Секретный ключ приложения',
            'helper' => 'Please go to https://developers.facebook.com to create new app update App ID, App Secret. Callback URL is :callback',
        ],
        'google' => [
            'title' => 'Google login settings',
            'description' => 'Enable/disable & configure app credentials for Google login',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Please go to https://console.developers.google.com/apis/dashboard to create new app update App ID, App Secret. Callback URL is :callback',
        ],
        'github' => [
            'title' => 'Github login settings',
            'description' => 'Enable/disable & configure app credentials for Github login',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Please go to https://github.com/settings/developers to create new app update App ID, App Secret. Callback URL is :callback',
        ],
        'linkedin' => [
            'title' => 'Linkedin login settings',
            'description' => 'Enable/disable & configure app credentials for Linkedin login',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Please go to https://www.linkedin.com/developers/apps/new to create new app update App ID, App Secret. Callback URL is :callback',
        ],
        'enable' => 'Включить?',
    ],
    'menu' => 'Вход через соц.сети',
];
