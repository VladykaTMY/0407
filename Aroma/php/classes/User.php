<?php
class User
{
    private $name;
    private $lastname;
    private $email;
    private $id;

    function __construct($id, $name, $lastname, $email)
    {
        $this->id = $id;
        $this->name = $name;
        $this->lastname = $lastname;
        $this->email = $email;
    }

    function getId()
    {
        return $this->id;
    }
    function getName()
    {
        return $this->name;
    }
    function getLastname()
    {
        return $this->lastname;
    }
    function getEmail()
    {
        return $this->email;
    }
    //статический метод добавления пользователя
    static function addUser($name,$lastname,$email,$pass)
    {
        global $mysqli;
        $email = trim(mb_strtolower($_POST['email']));
        $pass = trim($_POST['pass']);
        $pass = password_hash("$pass", PASSWORD_DEFAULT);
        $result = $mysqli->query("SELECT * FROM `users` WHERE `email` = '$email'");
        if($result->num_rows != 0) {
            return json_encode(["result"=>"success"]);
        }
    }
}
