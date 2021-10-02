<?php

session_start();

$sName = $_POST['name'];
$sFam = $_POST['lastname'];

$_SESSION['name'] = $sName;
$_SESSION['lastname'] = $sFam;

$timeNow = time();
$timeNow = date('H:i:s', $timeNow); //22:15:37


if(isset($_SESSION['name']) && isset($_SESSION['lastname'])){
    if($timeNow >= 5 && $timeNow < 11){
        $hi = "Доброе утро, {$_SESSION['name']} {$_SESSION['lastname']}!";
        $br = '<br>';
        $clock = 'Сейчас у нас ' . $timeNow . ' утра';
        print_r($hi);
        echo $br . $clock;
    }elseif ($timeNow >= 11 && $timeNow < 16){
        $hi = "Доброго денечка, {$_SESSION['name']} {$_SESSION['lastname']}!";
        $br = '<br>';
        $clock = 'Сейчас у нас ' . $timeNow . ' дня';
        print_r($hi);
        echo $br . $clock;
    }elseif ($timeNow >= 16 && $timeNow < 24){
        $hi = "Доброго вечерка, {$_SESSION['name']} {$_SESSION['lastname']}!";
        $br = '<br>';
        $clock = 'Сейчас у нас ' . $timeNow . ' вечера';
        print_r($hi);
        echo $br . $clock;
    }elseif ($timeNow >= 24 && $timeNow < 5){
        $hi = "Иди спать, {$_SESSION['name']} {$_SESSION['lastname']}!";
        $br = '<br>';
        $clock = 'Ты время видел? Сейчас у нас ' . $timeNow . ' ночи';
        print_r($hi);
        echo $br . $clock;
    }
}
if(empty($_SESSION['name']) || empty($_SESSION['lastname'])){
    echo "Вы не заполнили все поля";
}
echo '<br>';
echo "Ваша версия браузера: " . $_SERVER['HTTP_USER_AGENT'] . '<br>';
//$browser = get_browser(null, true);
//print_r($browser);


//session_destroy();