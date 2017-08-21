<?php

//echo '<pre>';
//var_dump($_REQUEST);

if (isset($_REQUEST['name']) and isset($_REQUEST['phone'])) {

    $name = $_REQUEST['name'];
    $phone = $_REQUEST['phone'];

    $row = 'Здравствуйте, ' . $name .
        '. Ваш номер: ' . $phone . PHP_EOL;

    file_put_contents('./contacts.txt',
        $row,   FILE_APPEND);
    echo 'Спасибо! Мы с Вами свяжемся.';

}   else {
    echo 'Не указаны параметры';
}