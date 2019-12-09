<?php
/*
*    Projet: Tableless Calendar.php + Tableless Calendar Style.css
*   Auteur: Uriel Ander
*    Version: 5.0
*    Date: 02.12.2019
*/
$day = 1;
$WeekDays = array("Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi","Dimanche");
echo '<link rel="stylesheet" href="Tableless%20Calendar%20Style.css">';
echo '<div class="Main">';
    for ($i = 0; $i < 7; $i++)
    {
        for ($j = 0; $j = 5; $j ++)
        {
            echo '<div>';
            echo $day;
            $day++;
            echo '</div>';
        }
    }
    echo '</div>';
?>