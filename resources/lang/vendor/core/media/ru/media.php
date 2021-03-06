<?php

return [
    'filter' => 'Фильтр',
    'everything' => 'Все',
    'image' => 'Изображение',
    'video' => 'Видео',
    'document' => 'Документ',
    'view_in' => 'Просмотр',
    'all_media' => 'Показать все',
    'trash' => 'Корзина',
    'recent' => 'Последние',
    'favorites' => 'Избранное',
    'upload' => 'Загрузить',
    'create_folder' => 'Создать папку',
    'refresh' => 'Обновить',
    'empty_trash' => 'Очистить корзину',
    'search_file_and_folder' => 'Поиск файлов и папок',
    'sort' => 'Сортировать',
    'file_name_asc' => 'Имя файла - по возрастанию',
    'file_name_desc' => 'Имя файла - по убыванию',
    'uploaded_date_asc' => 'Дата загрузки - по возрастанию',
    'uploaded_date_desc' => 'Дата загрузки - по убыванию',
    'size_asc' => 'Размер - по возрастанию',
    'size_desc' => 'Размер - по убыванию',
    'actions' => 'Действие',
    'nothing_is_selected' => 'Ничего не выбрано',
    'insert' => 'Вставить',
    'folder_name' => 'Имя папки',
    'create' => 'Создать',
    'rename' => 'Переименовать',
    'close' => 'Закрыть',
    'save_changes' => 'Сохранить',
    'move_to_trash' => 'Переместить в корзину',
    'confirm_trash' => 'Переместить в корзину?',
    'confirm' => 'Подтвердить',
    'confirm_delete' => 'Удалить',
    'confirm_delete_description' => 'Вы уверены?',
    'empty_trash_title' => 'Корзина пуста',
    'empty_trash_description' => 'Вы действительно хотите удалить все элементы из корзины?',
    'up_level' => 'На уровень выше',
    'upload_progress' => 'Процесс загрузки',
    'folder_created' => 'Папка создана!',
    'gallery' => 'Медиа-галерея',
    'trash_error' => 'Ошибка при удалении выбранных файлов',
    'trash_success' => 'Успешно перенесено в корзину!',
    'restore_error' => 'Ошибка при восстановлении выбранных файлов.',
    'restore_success' => 'Успешное восстановление!',
    'copy_success' => 'Файл(ы) скопирован(ы)',
    'delete_success' => 'Файл(ы) удалены!',
    'favorite_success' => 'Успешно добавлено в избранное!',
    'remove_favorite_success' => 'Файлы удалены!',
    'rename_error' => 'Ошибка при переименовании элемента (ов)',
    'rename_success' => 'Файл(ы) успешно переименован(ы)',
    'empty_trash_success' => 'Корзина успешно очищена!',
    'invalid_action' => 'Неверное действие!',
    'file_not_exists' => 'Файл не существует!',
    'download_file_error' => 'Ошибка при загрузке файлов!',
    'missing_zip_archive_extension' => 'Пожалуйста, включите расширение ZipArchive для загрузки файла!',
    'can_not_download_file' => 'Не удалось скачать файл!',
    'invalid_request' => 'Неверный запрос!',
    'add_success' => 'Успешно!',
    'file_too_big' => 'Файл слишком большой. Максимальный размер загружаемого файла :size байт',
    'can_not_detect_file_type' => 'Недопустимый тип файла!',
    'upload_failed' => 'Файл загружен НЕ полностью. Сервер разрешает максимальный размер загружаемого файла: :size. Пожалуйста, проверьте размер вашего файла или попробуйте загрузить снова в случае возникновения сетевых ошибок',
    'menu_name' => 'Медиа',
    'add' => 'Добавить',
    'javascript' => [
        'name' => 'Имя',
        'url' => 'URL',
        'full_url' => 'URL',
        'size' => 'Размер',
        'mime_type' => 'Тип',
        'created_at' => 'Загружено',
        'updated_at' => 'Изменено',
        'nothing_selected' => 'Ничего не выбрано',
        'visit_link' => 'Открыть ссылку',
        'no_item' => [
            'all_media' => [
                'icon' => 'fas fa-cloud-upload-alt',
                'title' => 'Перетащите сюда файлы и папки',
                'message' => 'Или используйте кнопку загрузки выше',
            ],
            'trash' => [
                'icon' => 'fas fa-trash-alt',
                'title' => 'В корзине пусто',
                'message' => 'Удаляйте файлы, чтобы автоматически переместить их в корзину. Удалите файлы из корзины, чтобы удалить их навсегда',
            ],
            'favorites' => [
                'icon' => 'fas fa-star',
                'title' => 'Вы еще ничего не добавили в избранное',
                'message' => 'Добавляйте файлы в избранное, чтобы легко находить их позже',
            ],
            'recent' => [
                'icon' => 'far fa-clock',
                'title' => 'Вы еще ничего не открывали',
                'message' => 'Все последние файлы, которые вы открыли, будут отображаться здесь',
            ],
            'default' => [
                'icon' => 'fas fa-sync',
                'title' => 'Пусто',
                'message' => 'Каталог пуст',
            ],
        ],
        'clipboard' => [
            'success' => 'Ссылки на файлы были скопированы в буфер обмена',
        ],
        'message' => [
            'error_header' => 'Ошибка',
            'success_header' => 'Успешно',
        ],
        'download' => [
            'error' => 'Файлы не выбраны, или их невозможно загрузить',
        ],
        'actions_list' => [
            'basic' => [
                'preview' => 'Предпросмотр',
            ],
            'file' => [
                'copy_link' => 'Копировать ссылку',
                'rename' => 'Переименовать',
                'make_copy' => 'Сделать копию',
            ],
            'user' => [
                'favorite' => 'Добавить в избранное',
                'remove_favorite' => 'Удалить из избранного',
            ],
            'other' => [
                'download' => 'Скачать',
                'trash' => 'В корзину',
                'delete' => 'Удалить навсегда',
                'restore' => 'Восстановить',
            ],
        ],
    ],
    'name_invalid' => 'Имя папки содержит недопустимые символы.',
    'url_invalid' => 'Пожалуйста, укажите действительный URL-адрес',
    'path_invalid' => 'Укажите действительный путь',
    'download_link' => 'Скачать',
    'url' => 'URL',
    'download_explain' => 'Введите один URL-адрес в строку.',
    'downloading' => 'Скачивание....',
];
