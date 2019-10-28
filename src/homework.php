<?php
$users["1"] = ["name" => "Alex", "email" => "alex@gmail.com"];
$users["2"] = ["name" => "Vlad", "email" => "vlad@gmail.com"];
$users["3"] = ["name" => "Max", "email" => "max@gmail.com"];
$users["4"] = ["name" => "Kat", "email" => "kat@gmail.com"];
$users["5"] = ["name" => "Ann", "email" => "ann@gmail.com"];

echo "<pre>";
echo count($users);
krsort($users);
reset($users);
while (list($key, $val) = each($users)) {
    print_r($key = $val);
}

$min = min($users["1"], $users["2"], $users["3"], $users["4"], $users["5"]);
var_dump($min);

$max = max($users["1"], $users["2"], $users["3"], $users["4"], $users["5"]);
var_dump($max);

$next = next($users);
var_dump($next);

$prev = prev($users);
var_dump($prev);

unset($users["1"]);
var_dump($users);

echo "</pre>"


?>
