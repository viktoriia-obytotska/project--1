<?php
const INFO_FILE = 'info.txt';
function filedata (){
    $file = fopen (INFO_FILE, 'r');
    $data = fread($file, filesize(INFO_FILE));
    return explode(PHP_EOL, $data);
}
$user = filedata();
var_dump($user);

function datausers ()
{
    $file = file_get_contents(INFO_FILE);
    $users = explode(PHP_EOL, $file);
    $login = ['login1'];
    $pass = ['pas123'];
    $user_data = [];
    foreach ($users as $user) {
        $user_data[]=$user;
        if (isset($login) && isset($pass)) {
            return $user_data;
        } else {
            return 'Пользователь не найден';
        }
    }
}
$arr= datausers();
$user = implode(' ', $arr);
echo $user;