<?php
require_once dirname(dirname(__FILE__)) . '/config.php';
$link = mysqli_connect(
    DB_HOST,
    DB_USER,
    DB_PASSWORD,
    DB_NAME
);

if (!$link) {
    printf("нет подключения к базе. Код ошибки %s\n", mysqli_connect_error());
    exit;
}