<?php

return [
    'title' => 'Настройки',
    'email_setting_title' => 'Настройки Email',
    'general' => [
        'theme' => 'Theme',
        'description' => 'Setting site information',
        'title' => 'General',
        'general_block' => 'General Information',
        'rich_editor' => 'Rich Editor',
        'site_title' => 'Site title',
        'admin_email' => 'Admin Email',
        'seo_block' => 'SEO Configuration',
        'seo_title' => 'SEO Title',
        'seo_description' => 'SEO Description',
        'webmaster_tools_block' => 'Google Webmaster Tools',
        'google_site_verification' => 'Google site verification',
        'placeholder' => [
            'site_title' => 'Site Title (maximum 120 characters)',
            'admin_email' => 'Admin Email',
            'seo_title' => 'SEO Title (maximum 120 characters)',
            'seo_description' => 'SEO Description (maximum 120 characters)',
            'google_analytics' => 'Google Analytics',
            'google_site_verification' => 'Google Site Verification',
        ],
        'cache_admin_menu' => 'Cache admin menu?',
        'enable_send_error_reporting_via_email' => 'Enable to send error reporting via email?',
        'time_zone' => 'Timezone',
        'default_admin_theme' => 'Default admin theme',
        'enable_change_admin_theme' => 'Enable change admin theme?',
        'enable' => 'Enable',
        'disable' => 'Disable',
        'enable_cache' => 'Enable cache?',
        'cache_time' => 'Cache time (minutes)',
        'cache_time_site_map' => 'Cache Time Site map',
        'admin_logo' => 'Admin logo',
        'admin_favicon' => 'Admin favicon',
        'admin_title' => 'Admin title',
        'admin_title_placeholder' => 'Title show to tab of browser',
        'cache_block' => 'Cache',
        'admin_appearance_title' => 'Admin appearance',
        'admin_appearance_description' => 'Setting admin appearance such as editor, language...',
        'seo_block_description' => 'Setting site title, site meta description, site keyword for optimize SEO',
        'webmaster_tools_description' => 'Google Webmaster Tools (GWT) is free software that helps you manage the technical side of your website',
        'cache_description' => 'Config cache for system for optimize speed',
        'yes' => 'Yes',
        'no' => 'No',
        'show_on_front' => 'Your homepage displays',
        'select' => '— Select —',
        'show_site_name' => 'Show site name after page title, separate with "-"?',
        'locale' => 'Site language',
        'locale_direction' => 'Front site language direction',
        'admin_locale_direction' => 'Admin language direction',
        'admin_login_screen_backgrounds' => 'Login screen backgrounds (~1366x768)',
    ],
    'email' => [
        'subject' => 'Subject',
        'content' => 'Содержание',
        'title' => 'Setting for email template',
        'description' => 'Шаблон электронной почты с использованием HTML и системных переменных.',
        'reset_to_default' => 'Reset to default',
        'back' => 'Перейти к настройкам',
        'reset_success' => 'Reset back to default successfully',
        'confirm_reset' => 'Сбросить шаблон?',
        'confirm_message' => 'Вы действительно хотите сбросить этот шаблон электронной почты по умолчанию?',
        'continue' => 'Продолжить',
        'sender_name' => 'Имя отправителя',
        'sender_name_placeholder' => 'Имя',
        'sender_email' => 'Email отправителя',
        'mailer' => 'Метод отправки',
        'port' => 'Порт',
        'port_placeholder' => 'Ex: 587',
        'host' => 'Хост',
        'host_placeholder' => 'Пример: smtp.gmail.com',
        'username' => 'Username',
        'username_placeholder' => 'Username to login to mail server',
        'password' => 'Пароль',
        'password_placeholder' => 'Password to login to mail server',
        'encryption' => 'Шифрование',
        'mail_gun_domain' => 'Домен',
        'mail_gun_domain_placeholder' => 'Домен',
        'mail_gun_secret' => 'Secret',
        'mail_gun_secret_placeholder' => 'Secret',
        'mail_gun_endpoint' => 'Endpoint',
        'mail_gun_endpoint_placeholder' => 'Endpoint',
        'log_channel' => 'Журнал',
        'sendmail_path' => 'Sendmail Path',
        'encryption_placeholder' => 'Шифрование: ssl или tls',
        'ses_key' => 'Ключ',
        'ses_key_placeholder' => 'Ключ',
        'ses_secret' => 'Secret',
        'ses_secret_placeholder' => 'Secret',
        'ses_region' => 'Region',
        'ses_region_placeholder' => 'Region',
        'postmark_token' => 'Токен',
        'postmark_token_placeholder' => 'Токен',
        'template_title' => 'Email templates',
        'template_description' => 'Base templates for all emails',
        'template_header' => 'Email template header',
        'template_header_description' => 'Template for header of emails',
        'template_footer' => 'Email template footer',
        'template_footer_description' => 'Template for footer of emails',
        'default' => 'По умолчанию',
        'using_queue_to_send_mail' => 'Using queue job to send emails (Must to setup Queue first https://laravel.com/docs/queues#supervisor-configuration)',
    ],
    'media' => [
        'title' => 'Медиа',
        'driver' => 'Драйвер',
        'description' => 'Настройки медиа',
        'aws_access_key_id' => 'AWS Access Key ID',
        'aws_secret_key' => 'AWS Secret Key',
        'aws_default_region' => 'AWS Default Region',
        'aws_bucket' => 'AWS Bucket',
        'aws_url' => 'AWS URL',
        'do_spaces_access_key_id' => 'DO Spaces Access Key ID',
        'do_spaces_secret_key' => 'DO Spaces Secret Key',
        'do_spaces_default_region' => 'DO Spaces Default Region',
        'do_spaces_bucket' => 'DO Spaces Bucket',
        'do_spaces_endpoint' => 'DO Spaces Endpoint',
        'do_spaces_cdn_enabled' => 'Is DO Spaces CDN enabled?',
        'media_do_spaces_cdn_custom_domain' => 'Do Spaces CDN custom domain',
        'media_do_spaces_cdn_custom_domain_placeholder' => 'https://your-custom-domain.com',
        'wasabi_access_key_id' => 'Wasabi Access Key ID',
        'wasabi_secret_key' => 'Wasabi Secret Key',
        'wasabi_default_region' => 'Wasabi Default Region',
        'wasabi_bucket' => 'Wasabi Bucket',
        'wasabi_root' => 'Wasabi Root',
        'default_placeholder_image' => 'Default placeholder image',
        'enable_chunk' => 'Enable chunk size upload?',
        'chunk_size' => 'Chunk size (Bytes)',
        'chunk_size_placeholder' => 'Default: 1048576 ~ 1MB',
        'max_file_size' => 'Chunk max file size (MB)',
        'max_file_size_placeholder' => 'Default: 1048576 ~ 1GB',
        'enable_watermark' => 'Enable watermark?',
        'watermark_source' => 'Водяной знак',
        'watermark_size' => 'Размер водяного знака (%)',
        'watermark_size_placeholder' => 'По умолчанию: 10 (%)',
        'watermark_opacity' => 'Watermark Opacity (%)',
        'watermark_opacity_placeholder' => 'Default: 70 (%)',
        'watermark_position' => 'Отображать водяной знак',
        'watermark_position_x' => 'Позиция по X',
        'watermark_position_y' => 'Позиция по Y',
        'watermark_position_top_left' => 'Вверху слева',
        'watermark_position_top_right' => 'Вверху справа',
        'watermark_position_bottom_left' => 'Внизу слева',
        'watermark_position_bottom_right' => 'Внизу справа',
        'watermark_position_center' => 'По центру',
        'bunnycdn_hostname' => 'FTP',
        'bunnycdn_key' => 'Регион',
    ],
    'license' => [
        'purchase_code' => 'Purchase code',
        'buyer' => 'Buyer',
    ],
    'field_type_not_exists' => 'This field type does not exist',
    'save_settings' => 'Сохранить',
    'template' => 'Шаблон',
    'description' => 'Описание',
    'enable' => 'Enable',
    'send' => 'Отправить',
    'test_email_description' => 'Чтобы отправить тестовое электронное письмо, пожалуйста, убедитесь, что вы обновили конфигурацию!',
    'test_email_input_placeholder' => 'Enter the email which you want to send test email.',
    'test_email_modal_title' => 'Отправить тестовое письмо',
    'test_send_mail' => 'Отправить тестовое письмо',
    'test_email_send_success' => 'Письмо отправлено!',
    'locale_direction_ltr' => 'Left to Right',
    'locale_direction_rtl' => 'Right to Left',
    'saving' => 'Сохранение...',
    'email_add_more' => 'Добавить',
];
