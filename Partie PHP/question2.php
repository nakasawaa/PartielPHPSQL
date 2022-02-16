<?php

$x = 5;
$i;
echo 'Somme de tous les entiers précedents de '.$x.'<br>';
$res;
    for ($i = 1; $i <= $x; $i++)
    {
        $res =+ $i;
        echo $i.' + ';

    }
    echo ' = '.$i+$res.'<br>';

?>