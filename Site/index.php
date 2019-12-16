<?php
require "controller/controller.php";

if(isset($_GET['action']))
{
    $action = $_GET['action'];
    switch ($action)
    {
        case 'home';
        home();
        break;
        case 'contact';
        contact();
        break;
        default;
        home();
        break;
    }
}
else
{
    home();
}
