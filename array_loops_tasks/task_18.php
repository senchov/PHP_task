<?php
$days = ['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];

foreach ($days as $item)
{
   if ($item === 'Sunday' || $item === 'Saturday')
   {
        echo  '<strong>'.$item.'</strong><br>';
   }else
   {
       echo  $item.'<br>';
   }
}