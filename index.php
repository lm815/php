<?php

<<<<<<< HEAD
$message = false; //
$error = false; //Для ошибок
=======
$message = false;//Если выражение принимает значение FALSE, то PHP проигнорирует инструкцию
>>>>>>> e17d212642469fded7980a3dd0e7c1641a4e1cb5

if (isset($_REQUEST['name']) and isset($_REQUEST['phone'])) {//определяет, установлена ли пременная, конструкция if предоставляет возможность условного выполнения фрагментов кода

<<<<<<< HEAD
    $name = $_REQUEST['name']; // Для сокращения
=======
    $name = $_REQUEST['name'];//имя массива
>>>>>>> e17d212642469fded7980a3dd0e7c1641a4e1cb5
    $phone = $_REQUEST['phone'];

    if (empty($name) || empty($phone)) {
        $error = 'Заполните поля';
    } else {
        $row = 'Здравствуйте, ' . $name .
            '. Ваш номер: ' . $phone . PHP_EOL;

<<<<<<< HEAD
        // PHP_EOL = '\n'

        file_put_contents('./contacts.txt',
            $row, FILE_APPEND);

        $message = 'Спасибо! Мы с Вами свяжемся.';
    }
=======
    file_put_contents('./contacts.txt',//Записать строку в файл
        $row, FILE_APPEND);//Если файл filename уже существует, данные будут дописаны в конец файла вместо того, чтобы его перезаписать.
>>>>>>> e17d212642469fded7980a3dd0e7c1641a4e1cb5

}

?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="./CSS/bootstrap.min.css">
</head>
<body>

<<<<<<< HEAD
   <div class="container">

       <h3>Форма обратной связи</h3>

<?php if ($message) : ?>
    <p class="alert-success col-md-4"><?= $message ?></p>

<?php else: ?>
    <form class="form-horizontal" action="index.php" method="post">
        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Имя</label>
            <div class="col-md-4">
                <input type="text" name="name" class="form-control" placeholder="Имя">
            </div>
        </div>
        <div class="form-group">
            <label for="phone" class="col-sm-2 control-label">Номер телефона</label>
            <div class="col-md-4">
                <input type="text" name="phone" class="form-control" placeholder="Введите номер">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-md-10">
                <button type="submit" class="btn btn-primary">Отправить</button>
            </div>
        </div>
        <p class="alert-danger col-md-4"><?= $error ?></p>
    </form>
=======
<?php //if ($message) : ?><!--конструкция if предоставляет возможность условного выполнения фрагментов кода-->
   <?= $message ?>
<?php //else: ?><!--else расширяет оператор if, чтобы выполнить выражение, в случае если условие в операторе if равно FALSE-->
<!--       <form action="index.php" method="post"> Method-Имя метода класса-->
<!--    <p>Представьтесь</p> Параграф-->
<!--    <input type="text" name="name"> <input> предназначен для создания текстовых полей, различных кнопок, переключателей и флажков-->
<!--    <p>Укажите ваш номер</p>Параграф-->
<!--    <input type="text" name="phone">предназначен для создания текстовых полей, различных кнопок, переключателей и флажков-->
<!--    <button type="submit">Отправить</button> Кнопка-->
       </form>
>>>>>>> e17d212642469fded7980a3dd0e7c1641a4e1cb5
<?php endif; ?>

     </div>
</body>
</html>
