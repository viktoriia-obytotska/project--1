<?php
function filedata (){
    $file = fopen ('info.txt', 'r');
    $data = fread($file, filesize('info.txt'));
    return explode(PHP_EOL, $data);
}
$user = filedata();
var_dump($user);

function datausers () {
    $login = ['login1'];
    $pass = ['pas123'];
    $user = filedata();
    if($login == $user && $pass == $user){
        return $user;
    }
else {
    return 'Пользователь не найден';
}
}
$arr = datausers();
var_dump($arr);