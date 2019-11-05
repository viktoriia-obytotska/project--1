<?php
////Задание 1 - в переменной $date лежит дата формата '31-12-2020'. Преобразуйте эту дату в формат '2020.12.31'

$data = '31-12-2020';
$data_new = date("Y.m.d", strtotime($data));
echo $data_new;


////Задание 2 - дана строка 'london is the capital of great britain'.
///  Сделайте из нее строку'London Is The Capital Of Great Britain'
///Вариант 1
$str = 'london is the capital of great britain';
$str_p = explode(' ', $str);
$new_str = [];
foreach ($str_p as $str_1){
    $new_str = ucfirst($str_1);
    }
$str = implode (' ', $new_str);
var_dump($str);

///Вариант 2

$str_2 = 'london is the capital of great britain';
$str_2 = mb_convert_case($str_2, MB_CASE_TITLE, "UTF-8");
echo $str_2;

////Задание 3 - дана переменная $password, в которой хранится пароль пользователя.
///  Если количество символов пароля больше 7 и меньше 12, то выведите пользователю сообщение о том,
///  что пароль подходит, иначе: сообщение о том, что нужно придумать другой пароль.

$password = 'qwerty123';
if(strlen ($password)>7 and ($password)<12) {
    echo 'Пароль успешный';
}
else{
    echo 'Придумайте другой пароль';
}

////Задание 4 - дана строка с буквами и цифрами, например, '1a2b3c4b5d6e7f8g9h0'.
///  Удалите из нее все цифры. В нашем случае должна получится строка 'abcbdefgh'

$string = '1a2b3c4b5d6e7f8g9h0';
$str_arr = str_split ($string);
$result = [];
foreach ($str_arr as $key=> $str_new){
    if($str_new>0 && $key+2) {
        $result[] = $str_new;
    }
}
$line = str_replace($result, '', $string);
var_dump($line);



