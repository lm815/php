<?php
$message = false; //
$error = false; // Для ошибок

if (isset($_REQUEST['name']) and isset($_REQUEST['phone'])) {
    $name = $_REQUEST['name']; // Для сокращения
    $phone = $_REQUEST['phone'];
    if (empty($name) || empty($phone)) {
        $error = 'Заполните поля';//Для ошибок
    } else {
        $row = 'Здравствуйте, ' . $name .
            '. Ваш номер: ' . $phone . PHP_EOL;
        // PHP_EOL = '\n'
        file_put_contents('./contacts.txt',
            $row, FILE_APPEND);
        $message = 'Спасибо! Мы обязательно свяжемся с Вами';
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
    <h3>Заявка на участие в соревнованиях</h3>

    <?php if ($message) : ?>
        <p class="alert-success col-md-4"><?= $message ?></p>
    <?php else: ?>
    <form class="form-horizontal" action="index.php" method="post">
        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Имя</label>
            <div class="col-md-4">
                <input type="text" name="name" class="form-control" placeholder="Имя" required>
            </div>
            <form class="form-horizontal" action="index.php" method="post">
                <div class="form-group">
                    <label for="surname" class="col-sm-2 control-label">Фамилия</label>
                    <div class="col-md-4">
                        <input type="text" name="surname" class="form-control" placeholder="Фамилия" required>
                    </div>
                    <div class="form-group">
                        <label for="pol" class="col-sm-2">Пол</label>
                        <div class="col-md-4">
                            <select name="pol" id="pol">
                                <option value="">Указать</option>
                                <option value="1">Мужской</option>
                                <option value="2">Женский</option>
                            </select>
                        </div>
                        <form class="form-horizontal" action="index.php" method="post">
                            <div class="form-group">
                                <label for="city" class="col-sm-2 control-label">Город проживания</label>
                                <div class="col-md-4">
                                    <input type="text" name="city" class="form-control" placeholder="Город проживания"
                                           required>
                                </div>
                                <form class="form-horizontal" action="index.php" method="post">
                                    <div class="form-group">
                                        <label for="phone" class="col-sm-2 control-label">Номер телефона</label>
                                        <div class="col-md-4">
                                            <input type="text" name="phone" class="form-control"
                                                   placeholder="Введите номер" required>
                                        </div>
                                    </div>
                                    <form class="form-horizontal" action="index.php" method="post">
                                        <div class="form-group">
                                            <label for="email" class="col-sm-2 control-label">e-mail</label>
                                            <div class="col-md-4">
                                                <input type="text" name="email" class="form-control"
                                                       placeholder="email" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-md-10">
                                                <button type="submit" class="btn btn-primary">Отправить</button>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-md-10">
                                                <button type="reset" class="btn btn-primary">Сбросить</button>
                                            </div>
                                        </div>

                                        <p class="alert-danger col-md-4"><?= $error ?></p>
                                    </form>
                                    <?php endif; ?>


                            </div>

</body>
</html>
