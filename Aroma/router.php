<?php
$url = explode("/", $_SERVER['REQUEST_URI']);

if($url[1] == auth){
    $content = file_get_contents("pages/login.php");
}else if($url[1] == reg){
    $content = file_get_contents("pages/register.html");
}else if($url[1] == users) {
require_once("pages/users/index.html");
}else{
    $content = file_get_contents("pages/index.php");
}

if(!empty($content)) require_once("template.php");

// if($url[1] == blog) {
//     require_once("blog.php");
// }else if($url[1] == auth) {
//     require_once("login.php");
// }