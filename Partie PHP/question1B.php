<?php

function f(){
    
    for ($i = 1; $i <= 10; $i++)
{
    Echo 'Table de multiplication de '.$i.'<br>';
    for ($x = 1; $x <= 10; $x++)
    {
        echo $i.' x '.$x.' = '.$i*$x.'<br>';
    }
}
}
f(); 
?>