<?php
$input = '123456';

$num = (int)$input;

if (ctype_digit($input))
{
   while ((int)$num > 0)
   {
       $output = $num % 10;
       $num = $num * 0.1;
       echo  $output.'<br>';
   }
}else
{
    echo  'Input correct data';
}
