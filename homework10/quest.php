<?php

$question = '';
$answers = [];
$result = '';

$steps = [
    [
        'id' => 1,
        'question' => 'Сколько Вам лет?',
        'answers' => [
            [
                'text' => 'Больше 18',
                'function' => 'next',
                'next_step' => 2,
            ],
            [
                'text' => 'Меньше 18',
                'function' => 'endGame',
            ],
        ],
    ],
    [
        'id' => 2,
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
        'question' => 'I...Jennifer.',
        'answers' => [
            [
                'text' => 'is',
                'function' => 'endGame',
            ],
            [
                'text' => 'are',
                'function' => 'endGame',
            ],
            [
                'text' => 'be',
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
        'question' => 'Bananas are...',
        'answers' => [
            [
                'text' => 'black',
                'function' => 'endGame',
            ],
            [
                'text' => 'yellow',
                'function' => 'next',
                'next_step' => 5,
            ],
            [
                'text' => 'green',
                'function' => 'endGame',
            ],
            [
                'text' => 'purple',
                'function' => 'endGame',
            ],
        ],
    ],
    [
        'id' => 5,
        'question' => 'Stand...please!',
        'answers' => [
            [
                'text' => 'up',
                'function' => 'next',
                'next_step' => 6,
            ],
            [
                'text' => 'down',
                'function' => 'endGame',
            ],
            [
                'text' => 'at',
                'function' => 'endGame',
            ],[
                'text' => 'close',
                'function' => 'endGame',
            ],
        ],
    ],
    [
        'id' => 6,
        'question' => 'I`ve got...fingers on my hand.',
        'answers' => [
            [
                'text' => 'five',
                'function' => 'next',
                'next_step' => 7,
            ],
            [
                'text' => 'three',
                'function' => 'endGame',
            ],
            [
                'text' => 'four',
                'function' => 'endGame',
            ],[
                'text' => 'ten',
                'function' => 'endGame',
            ],

        ],
    ],
    [
        'id' => 7,
        'question' => 'What are you...now?',
        'answers' => [
            [
                'text' => 'doing',
                'function' => 'next',
                'next_step' => 8,
            ],
            [
                'text' => 'to do',
                'function' => 'endGame',
            ],
            [
                'text' => 'do',
                'function' => 'endGame',
            ],
            [
                'text' => 'done',
                'function' => 'endGame',
            ],
        ],
    ],
    [
        'id' => 8,
        'question' => 'Какое слово здесь лишнее?',
        'answers' => [
            [
                'text' => 'ocean',
                'function' => 'endGame',
            ],
            [
                'text' => 'lake',
                'function' => 'endGame',
            ],
            [
                'text' => 'continent',
                'function' => 'next',
                'next_step' => 9,
            ],
            [
                'text' => 'river',
                'function' => 'endGame',
            ],
        ],
    ],
    [
        'id' => 9,
        'question' => 'Выберите правильное значение слова "Refrigerator',
        'answers' => [
            [
                'text' => 'Шкаф',
                'function' => 'endGame',
            ],
            [
                'text' => 'Холодильник',
                'function' => 'next',
                'next_step' => 10,
            ],
            [
                'text' => 'Грузовик',
                'function' => 'endGame',
            ],
            [
                'text' => 'Кондиционер',
                'function' => 'endGame',
            ],
        ],
    ],
    [
        'id' => 10,
        'question' => 'How...books on this table?',
        'answers' => [
            [
                'text' => 'much',
                'function' => 'endGame',
            ],
            [
                'text' => 'is much',
                'function' => 'endGame',
            ],
            [
                'text' => 'is many',
                'function' => 'endGame',
            ],
            [
                'text' => 'many',
                'function' => 'next',
                'next_step' => 11,
            ],
        ],
    ],
    [
        'id' => 11,
        'question' => 'He...an international footballer.',
        'answers' => [
            [
                'text' => 'is',
                'function' => 'next',
                'next_step' => 12,
            ],
            [
                'text' => 'am',
                'function' => 'endGame',
            ],
            [
                'text' => 'are',
                'function' => 'endGame',
            ],
            [
                'text' => 'the',
                'function' => 'endGame',
            ],
        ],
    ],
    [
        'id' => 12,
        'question' => '...you...a middle name?',
        'answers' => [
            [
                'text' => 'Has...got',
                'function' => 'endGame',
            ],
            [
                'text' => 'Have...got',
                'function' => 'next',
                'next_step' => 13,
            ],
            [
                'text' => 'Do...got',
                'function' => 'endGame',
            ],
            [
                'text' => 'Are...got',
                'function' => 'endGame',
            ],
        ],
    ],
    [
        'id' => 13,
        'question' => 'This car is...than the other one.',
        'answers' => [
            [
                'text' => 'the expensive',
                'function' => 'endGame',
            ],
            [
                'text' => 'expensive',
                'function' => 'endGame',
            ],
            [
                'text' => 'the expensivest',
                'function' => 'endGame',
            ],
            [
                'text' => 'more expensive',
                'function' => 'next',
                'next_step' => 14,
            ],
        ],
    ],
    [
        'id' => 14,
        'question' => 'Выберите правильное значение слова "House"',
        'answers' => [
            [
                'text' => 'Дом',
                'function' => 'next',
                'next_step' => 15,
            ],
            [
                'text' => 'Квартира',
                'function' => 'endGame',
            ],
            [
                'text' => 'Дача',
                'function' => 'endGame',
            ],
            [
                'text' => 'Деревня',
                'function' => 'endGame',
            ],
        ],
    ],
    [
        'id' => 15,
        'question' => 'Какое слово здесь лишнее?',
        'answers' => [
            [
                'text' => 'Apple',
                'function' => 'endGame',
            ],
            [
                'text' => 'Orange',
                'function' => 'endGame',
            ],
            [
                'text' => 'Potato',
                'function' => 'next',
                'next_step' => 16,
            ],
            [
                'text' => 'Grapefruit',
                'function' => 'endGame',
            ],
        ],
    ],
    [
        'id' => 16,
        'question' => 'My favourite...is "Titanic".',
        'answers' => [
            [
                'text' => 'color',
                'function' => 'endGame',
            ],
            [
                'text' => 'movie',
                'function' => 'next',
                'next_step' => 17,
            ],
            [
                'text' => 'book',
                'function' => 'endGame',
            ],
            [
                'text' => 'cartoon',
                'function' => 'endGame',
            ],
        ],
    ],
    [
        'id' => 17,
        'question' => '...? -I`m a pilot.',
        'answers' => [
            [
                'text' => 'What do you do?',
                'function' => 'next',
                'next_step' => 18,
            ],
            [
                'text' => 'How do you do?',
                'function' => 'endGame',
            ],
            [
                'text' => 'How are you?',
                'function' => 'endGame',
            ],
            [
                'text' => 'What are you doing?',
                'function' => 'endGame',
            ],
        ],
    ],
    [
        'id' => 18,
        'question' => 'My favourite season is...because I love New Year!',
        'answers' => [
            [
                'text' => 'winter',
                'function' => 'next',
                'next_step' => 19,
            ],
            [
                'text' => 'spring',
                'function' => 'endGame',
            ],
            [
                'text' => 'summer',
                'function' => 'endGame',
            ],
            [
                'text' => 'autumn',
                'function' => 'endGame',
            ],
        ],
    ],
    [
        'id' => 19,
        'question' => 'Какое слово здесь лишнее?',
        'answers' => [
            [
                'text' => 'Bus',
                'function' => 'endGame',
            ],
            [
                'text' => 'Car',
                'function' => 'endGame',
            ],
            [
                'text' => 'Truck',
                'function' => 'endGame',
            ],
            [
                'text' => 'Boat',
                'function' => 'next',
                'next_step' => 20,
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
        $result = 'Ваш уровень языка ниже среднего';
    } else if ($answer['function'] === 'win') {
        $result = 'Ваш уровень языка выше среднего';
    }
} else {
    $step = findNextStep(1, $steps);
    $question = generateQuestion($step);
    $answers = generateAnswers($step);
}