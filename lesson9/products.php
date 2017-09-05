<?php
// [Название, Цена, Описание]
$products = [
    ['Шапка мужская', 100, 'Крутая шапка', '1.png', 'https://ru.wargaming.net/shop/twa/main/'],
    ['Штаны женские', 100, 'Стильные штаны', '2.png', 'https://ru.wargaming.net/shop/twa/main/'],
    ['Мяч волейбольный', 100, 'Lorem ipsum dolor', '3.png'],
    ['Джинсы', 100, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '4.png'],
    ['Футболка', 100, 'Lorem ipsum', '5.png'],
];
/**
 * Возвращает название товара
 *
 * @param $product
 * @return mixed
 */
function getName($product)
{
    return $product[0];
}
/**
 * Возвращает цену товара
 *
 * @param $product
 * @return mixed
 */
function getPrice($product)
{
    return $product[1];
}
/**
 * Возвращает описание товара
 *
 * @param $product
 * @return mixed
 */
function getDescription($product)
{
    return $product[2];
}

function getImage($product)
{
    return $product[3];
}

function getLink($product)
{
    return $product[4];
}

$products_new = [
    [
        'name' => 'название1',
        'price' => 100,
        'description' => 'lorem lorem',
        'image' => '3.png',
        'link' => 'https://ru.wargaming.net/shop/twa/main/',
        'colors' => ['Белый', 'Красный', 'Черный'],
    ],
 [
    'name' => 'название',
    'price' => 100,
    'description' => 'lorem lorem',
    'image' => '2.png',
    'link' => 'https://ru.wargaming.net/shop/twa/main/',
     'colors' => ['Зелёный', 'Жёлтый', 'Розовый'],
      ]

];