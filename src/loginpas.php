<?php

$login = $_POST['login'];
$pass = $_POST['pass'];


$userData = serialize($_POST);

$fileResource = fopen('file.txt', 'a+');


fclose($fileResource);

$file = fopen('file.txt', 'r');

$fileData = fread($file, filesize('file.txt'));

$users = explode(PHP_EOL, $fileData);

$userLog =[];
foreach ($users as $user) {
    $userLog = explode(' ', $user);

    if ($login == trim($userLog[0]) && $pass == trim($userLog[1])) {
        $fileResource = fopen('login1.txt', 'a+');

        echo $login;

        fclose($fileResource);
    }
    else {
        echo "Неверный логин или пароль";

    }


}


?>

