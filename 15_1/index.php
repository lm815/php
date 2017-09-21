<?php

spl_autoload_register();

echo '<pre>';

$rewiev = new \Models\Rewiev();
$data = [
    'name' => 'Мария',
    'phone' => '5456427468',
    'text' => 'Хороший сайт',
];
$rewiev->create($data);
print_r($data);

?>