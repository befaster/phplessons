<?php
require_once dirname(dirname(__FILE__)) . '/config.php';
$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if (!$link) {
    printf("Невозможно подключиться к базе данных. Код ошибки: %s\n", mysqli_connect_error());
    exit;
}

function getMenuIteams() {
    global $link;

    $result = mysqli_query($link, 'SELECT * FROM menu LIMIT 0, 30');

    $html='';

    while( $row = mysqli_fetch_assoc($result) ) {
        $html = $html . '<li><a href="' .$row['url'].'.php">'. $row['title'].'</a></li>';
    }
    return $html;

}

function sendEmail($email, $message){
    mail("alexsandr.byirka@gmail.com", "My Subject", $message. '<br> EMAIL:', $email);
}