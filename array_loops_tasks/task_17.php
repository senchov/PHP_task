<?php
$month = 'October';
$months = ['January', 'February' , 'March', 'May','June',
            'August','September','October','November','December'];

foreach ($months as $value)
{
    if ($value == $month)
        echo  '<strong>'.$value.'</strong><br>';
    else
        echo  $value.'<br>';

}
