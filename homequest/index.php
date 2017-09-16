<?php

require './quest.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
    <style>
        body {
            background-image: url("./image/space.jpg");
            color: #491217;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
            <img class="img-responsive center-block" src="<?= $step['image'] ?>">
        </div>
        <div class="container">
            <?= $question ?>
        </div>
    </div>
</div>
<form action="index.php" method="post">
    <div>
        <?= $question ?>
    </div>
    <div>
        <input type="hidden" value="<?= $a['abc'] ?? '123' ?>"/>
        <?php foreach ($answers as $answer) : ?>
            <div class="container">
                <div class="row">
                    <div class="btn-group-justified">
                        <input type="submit" class="btn-group-justified" name="submit" value="<?= $answer['text']; ?>">
                        <input type="hidden" id="<?= $answer['function'] ?>" name="function"
                               value="<?= $answer['function'] ?>"/>
                        <input type="hidden" id="<?= $answer['next_step'] ?>" name="next_step"
                               value="<?= $answer['next_step'] ?>"/>
                        <?= $answer['text'] ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <input type="submit" name="submit" value="Отправить">
    <div>
        <?= $result ?>
    </div>
</form>
</body>
</html>