<?php
require_once 'db.php';

/**
 * Get all items of main menu
 * @return string
 */
function getMenuItems () {
    return sqlSelect('SELECT * FROM menu');
}


function getArticles() {
    return sqlSelect('SELECT * FROM articles');
}

/**
 * Send email
 *
 * @param $email
 * @param $message
 */
function sendEmail($email, $message) {
    mail("joecool@example.com", "My Subject", $message . '<br>EMAIL:' . $email);
}

/**
 * SQL SELECT
 *
 * @return array
 */
function sqlSelect($sql) {
    global $link;

    $result = ($link, $sql);

    $items = array();

    while($row = mysqli_fetch_assoc($result)) {
        $items[] = $row;
    }

    return $items;
}