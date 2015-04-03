<?php
require_once 'db.php';

function getMenuItems () {
    global $link;

    $result = mysqli_query($link, 'SELECT * FROM menu');

    $html = '';

    while($row = mysqli_fetch_assoc($result)) {
        $html = $html . '<li><a href="' . $row['url'] . '.php">' . $row['title'] . '</a></li>';
    }

    return $html;
}

function sendEmail($email, $message) {
    mail("joecool@example.com", "My Subject", $message . '<br>EMAIL:' . $email);
}