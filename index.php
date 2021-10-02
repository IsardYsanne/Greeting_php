<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Give me name</title>
</head>
<body>
<form action="script.php" method="post">
    <p>Введите ваше имя</p>
    <input type="text" name="name">
    <br>
    <br>
    <p>Введите вашу фамилию</p>
    <input type="text" name="lastname">
    <br>
    <br>
    <input type="submit" name="submit">
    <br>
    <p>Сейчас у нас на часах:
        <?php
            $timeNow = time();
            $timeNow = date('H:i:s', $timeNow);
            echo $timeNow . '<br>';
        ?>
    </p>
</form>
</body>
</html>
