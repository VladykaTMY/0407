<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
$mysqli = mysqli_connect("localhost", "napli_sdo_0407", "123456", "napli_sdo_0407");

if ($mysqli == false) {
    print("error");
} else {

    $inputValue = $_POST['value'];
    $item = $_POST['item'];
    $id = $_SESSION['id'];
    $mysqli->query("UPDATE `users` SET `$item`='$inputValue' WHERE `id`='$id'");
    $_SESSION[$item] = $inputValue;
}
