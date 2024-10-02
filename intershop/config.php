<?php

// DB SETTINGS
define('DB_HOST', 'MariaDB-11.2');
define('DB_NAME', 'inter_shop');
define('DB_USER', 'root');
define('DB_PASS', '');

if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
    $protocol = 'https://';
} else {
    $protocol = 'http://';
}

// Хост сайта - используется для ссылок в браузере <a href="...">
define('HOST', $protocol . $_SERVER['HTTP_HOST'] . '/');

// Физический путь к корневой директории скрипта
define('ROOT', dirname(__FILE__) . '/');

// Доп настройки
define('SITE_NAME', 'Сайт Digital Nomad');
define('SITE_EMAIL', 'info@project.com');
