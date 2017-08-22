<?php

$message = false; //
$error = false; //Для ошибок

if (isset($_REQUEST['name']) and isset($_REQUEST['phone'])) {

    $name = $_REQUEST['name']; // Для сокращения
    $phone = $_REQUEST['phone'];

    if (empty($name) || empty($phone)) {
        $error = 'Заполните поля';
    } else {
        $row = 'Здравствуйте, ' . $name .
            '. Ваш номер: ' . $phone . PHP_EOL;

        // PHP_EOL = '\n'

        file_put_contents('./contacts.txt',
            $row, FILE_APPEND);

        $message = 'Спасибо! Мы с Вами свяжемся.';
    }

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
<?php endif; ?>

     </div>
</body>
</html>