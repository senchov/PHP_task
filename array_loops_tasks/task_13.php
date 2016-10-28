<?php


for ($i = 1; $i <= 9; $i++)
{
    $line = '';
   for ($j = 1; $j <= 9; $j++)
   {
       $mult = (string)$i*$j;
       $line.=$mult." ";
   }
   echo $line.'<br>';
    $line='';
}