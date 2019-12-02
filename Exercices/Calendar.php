/*
Projet: Calendar.php
Auteur: Uriel Ander
Version: 6.9
Date: 02.12.2019
*/
<?php
    $day = 1;
    echo '<table style="width: 100%">';
    echo '<caption>';
        echo '<h1>';
            echo date("F");
        echo '</h1>';
    echo '</caption>';
        for ($i = 0; $i < 5; $i ++)
        {
            echo '<tr style="width: 80% "></tr>';
            for ($j = 0; $j < 7; $j ++)
            {
                if($day % 2 == 0)
                    {echo '<td style="width: 80px">';}
                else
                    {echo '<td style="width: 80px" bgcolor="#6495ed">';}
                if($day > 31)
                    {}
                else
                    {echo $day;$day ++;}
                echo'</td>';
            }
            echo '<br>';
        }
    echo '</table>';
?>