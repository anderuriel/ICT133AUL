/*
Projet: ctophp.php
Auteur: Uriel Ander
Version: 1.6
Date: 02.12.2019
*/
<?php
$value = 20;
$step = 3;
$i = 0;
while($i < 10)
{
    if($value >= 30)
    {
        echo nl2br("le nombre vaut {$value}\n");
    }
    else
    {
        echo nl2br("le nombre est trop petit\n");
    }
    $value += $step;
    $i ++;
}
?>
