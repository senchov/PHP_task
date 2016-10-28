<?php

for ($i = 1; $i < 10; $i++ )
{
    $line = '';
    for ($j = 0; $j < $i; $j++)
    {
        $line .= $i;
    }
    echo $line.'<br>';

}