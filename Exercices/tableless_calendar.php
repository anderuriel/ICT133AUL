<?php
/*
*    Projet: tableless_calendar.php + tableless_calendar_style.css
*   Auteur: Uriel Ander
*    Version: 5.0
*    Date: 02.12.2019
*/
$day = 1;
$weekDays = ["Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi","Dimanche"];
echo '<link rel="stylesheet" href="tableless_calendar_style.css">';
    echo '<div class="divTable">';
        echo '<div class="divTableBody">';
            for ($i = 0; $i < 6; $i++)
            {
                echo '<div class="divTableRow ">';
                for ($j = 0; $j < 7; $j ++)
                {
                    echo '<div class="divTableCell weekdays">';
                        if($day < 32)
                        {
                            echo $day;
                            $day++;
                        }
                        else
                        {
                            echo "";
                        }
                    echo '</div>';
                }
                echo '</div>';
            }
        echo '</div>';
    echo '</div>';
?>