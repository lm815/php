<?php

$question = '';
$answers = [];
$result = '';
$image = '';
$winImage = './image/win.jpg';
$loseImage = './image/lose.jpg';

$steps = [
    [
        'id' => 1,
        'image' => './image/1.jpg',
        'question' => 'Сколько Вам лет?',
        'answers' => [
            [
                'text' => 'Меньше 18',
                'function' => 'endGame',
            ],
            [
                'text' => 'Больше 18',
                'function' => 'next',
                'next_step' => 2,
            ],
        ],
    ],
    [
        'id' => 2,
        'image' => './image/2.jpg',
        'question' => 'Изучали ли вы ранее английский язык?',
        'answers' => [
            [
                'text' => 'Нет',
                'function' => 'endGame',
            ],
            [
                'text' => 'Да',
                'function' => 'next',
                'next_step' => 3,
            ],
        ],
    ],
    [
        'id' => 3,
        'image' => './image/3.jpg',
        'question' => 'I...Jennifer.',
        'answers' => [
            [
                'text' => 'is',
                'function' => 'endGame',
            ],
            [
                'text' => 'am',
                'function' => 'next',
                'next_step' => 4,
            ],
        ],
    ],
    [
        'id' => 4,
        'image' => './image/4.jpg',
        'question' => 'Bananas are...',
        'answers' => [
            [
                'text' => 'purple',
                'function' => 'endGame',
            ],
            [
                'text' => 'yellow',
                'function' => 'next',
                'next_step' => 5,
            ],
        ],
    ],
    [
        'id' => 5,
        'image' => './image/5.png',
        'question' => 'Stand...please!',
        'answers' => [
            [
                'text' => 'down',
                'function' => 'endGame',
            ],
            [
                'text' => 'up',
                'function' => 'next',
                'next_step' => 6,
            ],
        ],
    ],
    [
        'id' => 6,
        'image' => './image/6.jpg',
        'question' => 'I`ve got...fingers on my hand.',
        'answers' => [
            [
                'text' => 'ten',
                'function' => 'endGame',
            ],
            [
                'text' => 'five',
                'function' => 'next',
                'next_step' => 7,
            ],
        ],
    ],
    [
        'id' => 7,
        'image' => './image/7.jpg',
        'question' => 'What are you...now?',
        'answers' => [
            [
                'text' => 'do',
                'function' => 'endGame',
            ],
            [
                'text' => 'doing',
                'function' => 'next',
                'next_step' => 8,
            ],
        ],
    ],
    [
        'id' => 8,
        'image' => './image/8.jpg',
        'question' => 'Выберите правильное значение слова "Refrigerator',
        'answers' => [
            [
                'text' => 'Кондиционер',
                'function' => 'endGame',
            ],
            [
                'text' => 'Холодильник',
                'function' => 'next',
                'next_step' => 9,
            ],
        ],
    ],
    [
        'id' => 9,
        'image' => './image/9.gif',
        'question' => 'How...books on this table?',
        'answers' => [
            [
                'text' => 'much',
                'function' => 'endGame',
            ],
            [
                'text' => 'many',
                'function' => 'next',
                'next_step' => 10,
            ],
        ],
    ],
    [
        'id' => 10,
        'image' => './image/10.jpg',
        'question' => 'He...an international footballer.',
        'answers' => [
            [
                'text' => 'the',
                'function' => 'endGame',
            ],
            [
                'text' => 'is',
                'function' => 'next',
                'next_step' => 11,
            ],
        ],
    ],
    [
        'id' => 11,
        'image' => './image/11.jpg',
        'question' => 'My favourite season is...because I love New Year!',
        'answers' => [
            [
                'text' => 'autumn',
                'function' => 'endGame',
            ],
            [
                'text' => 'winter',
                'function' => 'win',
            ],
        ],
    ],
];

function findNextStep($id, $steps)
{
    $step = null;
    foreach ($steps as $_step) {
        if ($_step['id'] == $id) {
            $step = $_step;
        }
    }
    return $step;
}

function generateQuestion($step)
{
    return $step['question'];
}

function generateImage($step)
{
    return $step['image'];
}

function generateAnswers($step)
{
    return $step['answers'];
}

if (isset($_POST['submit'])) {
    $answer['next_step']=$_POST['next_step'];
    $answer['function']=$_POST['function'];
    if ($answer['function'] === 'next') {
        $step = findNextStep($answer['next_step'], $steps);
        $question = generateQuestion($step);
        $answers = generateAnswers($step);
        $image = generateImage($step);
    } else if ($answer['function'] === 'endGame') {
        $result = 'Ваш уровень ниже среднего!';
        $step['image'] = $loseImage;
    } else if ($answer['function'] === 'win') {
        $result = 'Ваш уровень выше среднего!';
        $step['image'] = $winImage;
    }
} else {
    $step = findNextStep(1, $steps);
    $question = generateQuestion($step);
    $answers = generateAnswers($step);
    $image = generateImage($step);
}