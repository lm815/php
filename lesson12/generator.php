<?php

$names = [
    'Василий',
    'Пётр',
    'Геннадий',
    'Дмитрий',
    'Александр',
    'Алексей',
];

$surnames = [
    'Васечкин',
    'Петров',
    'Иванов',
];

$addresses = [
    'ул.Пушкина, д. 1',
    'ул. Ленина, д. 2',
    'ул. Комсомольская, д. 41',
];

function generatePerson($names, $surnames, $addresses)
{
    return [
        'name' => getName($names),
        'surname' => getSurname($surnames),
        'address' => getAddress($addresses),
        'phone' => generatePhone()
    ];
}

function getName($names)
{
   return getRandomElement($names);
}

function getSurname($surnames)
{
    return getRandomElement($surnames);
}
function getAddress($addresses)
{
    return getRandomElement($addresses);
}

function getRandomElement($array)
 {
     $arrayCount = count($array);

     return $array[rand(0, $arrayCount - 1)];
 }

function generatePhone()
{
    $phone = '+7' . rand(100, 999) . rand(1000000, 9999999);
    return $phone;
}