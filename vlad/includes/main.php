<?php
require_once 'db.php';
function getMenuIteams(){
    global $link;
    $resalt = mysqli_query($link, ' select * from menu');
    $html = '';
    while ($row = mysqli_fetch_assoc($resalt)) {
        $html = $html . ' <li class=""><a href="' . $row['url'] . '.php">' . $row['title'] . ' <span class="sr-only">(current)</span></a></li>';
    };
    return $html;
}

function getMenuIteamsDropdown(){
    global $link;
    $resalt = mysqli_query($link, 'SELECT  * FROM `mail_dropdown`');
    $html = '';
    while ($row = mysqli_fetch_assoc($resalt)) {
        $html = $html . ' <li class="dropdown">
                            <a href="'.$row['url'].'" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false">'.$row['title'].'
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Свадебные фото</a></li>
                                <li><a href="#">Коллажи</a></li>
                            </ul>
                        </li>';
    };
    return $html;
}