<?php
header('Content-Type: text/html; charset=utf-8');
$userName = $_POST['user_name'];

//mail('se@napli.ru', 'Тестовое письмо', "Привет, $userName" );
echo "Привет, $userName";

?>
