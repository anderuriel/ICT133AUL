<?php
//opening up a session
session_start();
require "model/model.php";
//calling this function displays the homepage
function home()
{
    $_GET['action'] = 'home';
    require "View/home.php";
}
//calling this function displays the login page
function LogIn($formdata)
{
    $_GET['action'] = 'login';

    if(loginCheck($formdata))
    {
        $_SESSION['user_session'] = $_POST['user_login'];
        $_GET['action'] = 'login';
        require "View/login.php";
    }
    else
    {
        require "View/login.php";
    }

}
function Register($formdata)
{
    $_GET['action'] = 'login';
    if(registerCheck($formdata))
    {
        require "View/register.php";
    }
    else
    {

    }
}
?>

