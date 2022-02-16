<?php
function f($i,$x){
    
    $i = 5;
    echo 'Table de multiplication de '.$i.'<br>';
        for ($x = 1; $x <= 10; $x++)
        {
            echo $i.' x '.$x.' = '.$i*$x.'<br>';
        }
 }
 f(5,1); 
?>