<?php


session_start();


if(isset($_SESSION['phones'][$_POST['product']])){
    $_SESSION['phones'][$_POST['product']]++;
}
else{
    $_SESSION['phones'][$_POST['product']] =1;
}

var_dump($_SESSION['phones']);

header('Location:/');