<?php
// [Название, Цена, Описание]
$products = [
    [0 => 'Шапка мужская', 1 => 100, 2 => 'Крутая шапка'],
    ['Штаны женские', 100, 'Стильные штаны'],
    ['Мяч волейбольный', 100, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, soluta?'],
    ['Джинсы', 100, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'],
    ['Футболка', 100, 'Lorem ipsum'],
];


function getName($product)
{
    return $product[0];
}

function getPrice($product)
{
    return $product[1];
}
function getDescription($product)
{
    return $product[2];
}