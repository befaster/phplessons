<?php
$link = mysqli_connect('localhost','root','root', 'phplessons');

if (!$link) {
    printf("Невозможно подключиться к базе данных. Код ошибки: %s\n", mysqli_connect_error());
    exit;
}