<?php 
session_start();
$_SESSION['ID']= null;
redirect("index.php");

function redirect($url) {
    ob_start();
    header('Location: '.$url);
    ob_end_flush();
    die();
}
?>