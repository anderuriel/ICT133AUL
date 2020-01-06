<?php
//call this function to display the homepage
function home()
{
    $_GET['action'] = 'home';
    require "View/home.php";
}
function LogIn()
{
    $_GET['action'] = 'login';
    require "View/login.php";
}
?>

