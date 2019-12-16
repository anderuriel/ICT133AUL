<?php
/*
*    Projet: tableless_calendar.php + tableless_calendar_style.css
*   Auteur: Uriel Ander
*    Version: 5.0
*    Date: 02.12.2019
*/
$day = 1;
$weekDays = ["Lundi" => "Lun","Mardi" => "Mar","Mercredi" => "Mer","Jeudi" => "Jeu","Vendredi" => "Ven","Samedi" => "Sam","Dimanche" => "Dim"];
echo '<link rel="stylesheet" href="tableless_calendar_style.css">';
echo '<div class="divTableHead weekdays">';
echo date("F");
echo '</div>';
    echo '<div class="divTable">';
        echo '<div class="divTableBody">';
            foreach($weekDays as $value)
            {
                echo '<div class="divTableCell weekdays">';
                echo $value;
                echo '</div>';
            }
            for ($i = 0; $i < 5 ; $i++)
            {
                echo '<div class="divTableRow ">';
                for ($j = 0; $j < 7; $j ++)
                {
                        if($day < 32)
                        {
                            echo '<div class="divTableCell weekdays">';
                            echo $day;
                            $day++;
                            echo '</div>';
                        }
                        else
                        {
                            echo "";
                        }
                }
                echo '</div>';
            }
        echo '</div>';
    echo '</div>';
?>