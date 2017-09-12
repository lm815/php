<?php


if (isset($_POST['submit'])) {
    add($_POST);
    echo 'Товар добавлен';
}

function getAll()
{
    $elements = [];
    foreach (file('./products.csv') as $row) {
        $element = explode("\t", $row);
        $elements[] = $element;
    }
    return $elements;
}
function add($data)
{
    $title = $data['title'];
    $price = $data['price'];

    $row = $title . "\t" . $price . PHP_EOL;
    file_put_contents('./products.csv', $row, FILE_APPEND);
}