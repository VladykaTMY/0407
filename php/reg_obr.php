<?php
header('Content-Type: text/html; charset=utf-8');
$mysqli = mysqli_connect("localhost", "napli_sdo_0407", "123456", "napli_sdo_0407");

if ($mysqli == false) {
    print("error");
} else {
    //print("Соединение установлено успешно<br><hr>");

    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = trim(mb_strtolower($_POST['email']));
    $pass = trim($_POST['pass']);
    $pass = password_hash("$pass", PASSWORD_DEFAULT);

    $result = $mysqli->query("SELECT * FROM `users` WHERE `email` = '$email'");
    if ($result->num_rows != 0) {
        print("exist");
    } else {
        $mysqli->query("INSERT INTO `users`(`name`, `lastname`, `email`, `pass`) VALUES ('$name','$lastname','$email','$pass')");
        print("ok");
    };
}



// echo "Имя: $name<br>
//             Фамилия: $lastname<br>
//             Email: $email<br>
//             Пароль: $pass";
