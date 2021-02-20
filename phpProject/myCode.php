<?php
 $number = 0;
 while($number <= 300) {
     $pin = (mt_rand(100,999)).(mt_rand(1000,9999)).(mt_rand(10000000,99999999))."<br>";
     echo "ETISALAT"."<br>";
     echo "Pin No: " .$pin."<br>";  
 }
 $number++;
?>