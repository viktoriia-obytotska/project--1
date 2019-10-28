<?php
$users["1"] = ["name" => "Alex", "email" => "alex@gmail.com", "lang" => "en"];
$users["2"] = ["name" => "Vlad", "email" => "vlad@gmail.com", "lang" => "ua"];
$users["3"] = ["name" => "Max", "email" => "max@gmail.com", "lang" => "ru"];
$users["4"] = ["name" => "Kat", "email" => "kat@gmail.com", "lang" => "fr"];
$users["5"] = ["name" => "Ann", "email" => "ann@gmail.com", "lang" => "de"];

$lang = [];
foreach ($users["5"] as $user["1"]) {
    $lang[] = $users["1"];
}
switch ($lang) {
    case "en":
        echo "Hello, user!";
        break;
        default:
            echo "Hello, user!";
            echo "Hallo, benutzer!";
            break;

}

?>
