<?php
//opening up a session
session_start();
//calling this function displays the homepage
function home()
{
    $_GET['action'] = 'home';
    require "View/home.php";
}
//calling this function displays the login page
function LogIn()
{
    $_GET['action'] = 'login';
    require "View/login.php";
}
?>

