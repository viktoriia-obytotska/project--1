<?php
$file = fopen ('news.txt', 'r');
$data = fread($file, filesize('news.txt'));
$news = explode(PHP_EOL, $data);

$arr_news =[];
foreach ( $news as $new) {
     $arr_news[] = unserialize( $new);

}


require_once 'news.phtml';