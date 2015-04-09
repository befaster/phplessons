<?php
$link = mysqli_connect('localhost','root','2212', 'phplessons');

if (!$link) {
    printf("Невозможно подключиться к базе данных. Код ошибки: %s\n", mysqli_connect_error());
    exit;
}