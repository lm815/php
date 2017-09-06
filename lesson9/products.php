<?php
// [Название, Цена, Описание]
$products = [
    ['Кепка мужская', 599, 'Чёрная кепка Nike', 'https://ru.wargaming.net/shop/twa/main/'],
    ['Кепка женская', 599, 'Розовая кепка с кактусом', 'https://www.google.ru/'],
    ['Шапка', 999, 'Шапка с символикой России', 'https://www.yandex.ru'],
    ['Шапка мужская ', 999, 'Шапка-ушанка для суровых российских зим', 'http://htmlbook.ru'],
    ['Шапка детская', 999, 'Тёплая детская шапка с пумпоном', 'http://www.asos.com'],
    ['Варежки', 999, 'Вязанные варежки с добавлением шерсти', 'http://www.boohoo.com'],
    ['Куртка мужская', 4999, 'Демисезонная мужская куртка с капюшоном', 'https://www.thekennelclub.org.uk/onlineshop'],
    ['Куртка женская', 4999, 'Спортивная женская куртка с подкладом', 'https://shop.vr.fi/onlineshop/Welcome.do?request_locale=en'],
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
        'name' => 'Кепка мужская',
        'price' => 599,
        'description' => 'Чёрная кепка Nike',
        'image' => '1.jpg',
        'link' => 'https://ru.wargaming.net/shop/twa/main/',
        'colors' => ['Белый', 'Красный', 'Черный'],
    ],
 [
    'name' => 'Кепка женская',
    'price' => 599,
    'description' => 'Розовая кепка с кактусом',
    'image' => '2.jpg',
    'link' => 'https://www.google.ru/',
     'colors' => ['Зелёный', 'Жёлтый', 'Розовый'],
      ],
    [
        'name' => 'Шапка',
        'price' => 999,
        'description' => 'Шапка с символикой России',
        'image' => '3.jpg',
        'link' => 'https://www.yandex.ru',
        'colors' => ['Синий', 'Красный', 'Черный'],
    ],
    [
        'name' => 'Шапка мужская',
        'price' => 999,
        'description' => 'Шапка-ушанка для суровых российских зим',
        'image' => '4.jpg',
        'link' => 'http://htmlbook.ru',
        'colors' => ['Красный', 'Черный'],
    ],
    [
        'name' => 'Шапка детская',
        'price' => 999,
        'description' => 'Тёплая детская шапка с пумпоном',
        'image' => '5.jpg',
        'link' => 'http://www.asos.com',
        'colors' => ['Белый', 'Голубой', 'Розовый'],
    ],
    [
        'name' => 'Варежки',
        'price' => 999,
        'description' => 'Вязанные варежки с добавлением шерсти',
        'image' => '6.jpg',
        'link' => 'http://www.boohoo.com',
        'colors' => ['Бордовый', 'Красный', 'Бежевый'],
    ],
    [
        'name' => 'Куртка мужская',
        'price' => 4999,
        'description' => 'Демисезонная мужская куртка с капюшоном',
        'image' => '7.jpg',
        'link' => 'https://www.thekennelclub.org.uk/onlineshop',
        'colors' => ['Белый', 'Красный', 'Черный'],
    ],
    [
        'name' => 'Куртка женская',
        'price' => 4999,
        'description' => 'Спортивная женская куртка с подкладом',
        'image' => '8.jpg',
        'link' => 'https://shop.vr.fi/onlineshop/Welcome.do?request_locale=en',
        'colors' => ['Белый', 'Оранжевый', 'Черный'],
    ],
];