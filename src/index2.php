<?php
$title = $_POST['title'];
$description = $_POST['description'];

$data = serialize($_POST);

$fileRes = file_put_contents('news.txt', $data . PHP_EOL, FILE_APPEND);

header("Location: /");



