<?php

$question = '';
$answers = [];
$result = '';

$steps = [
    [
        'id' => 1,
        'question' => 'Влево или вправо?',
        'answers' => [
            [
                'text' => 'Влево',
                'function' => 'next',
                'next_step' => 2,
            ],
            [
                'text' => 'Вправо',
                'function' => 'endGame',
            ],
        ],
    ],
    [
        'id' => 2,
        'question' => 'Прыгать или бежать?',
        'answers' => [
            [
                'text' => 'Прыгать',
                'function' => 'endGame',
            ],
            [
                'text' => 'Бежать',
                'function' => 'next',
                'next_step' => 3,
            ],
        ],
    ],
    [
        'id' => 3,
        'question' => 'Вперёд или назад?',
        'answers' => [
            [
                'text' => 'Вперёд',
                'function' => 'endGame',
            ],
            [
                'text' => 'Назад',
                'function' => 'win',
            ],
        ],
    ],
];

function findNextStep($id, $steps) {
    $step = null;
    foreach ($steps as $_step) {
        if ($_step['id'] == $id) {
            $step = $_step;
        }
    }
    return $step;
}

function generateQuestion($step) {
    return $step['question'];
}

function generateAnswers($step) {
    return $step['answers'];
}

if (isset($_POST['submit'])) {
    $answer = json_decode($_POST['answer'], true);
    if ($answer['function'] === 'next') {
        $step = findNextStep($answer['next_step'], $steps);
        $question = generateQuestion($step);
        $answers = generateAnswers($step);
    } else if ($answer['function'] === 'endGame') {
        $result = 'Вы проиграли';
    } else if ($answer['function'] === 'win') {
        $result = 'Вы победили';
    }
} else {
    $step = findNextStep(1, $steps);
    $question = generateQuestion($step);
    $answers = generateAnswers($step);
}