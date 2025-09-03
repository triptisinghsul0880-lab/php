<?php
$array = [10,20,30,40,50,60,70,80,90,100];
echo "original array: <br>";
print_r($array);
echo "<br><br>";
 
$temp = $array;
sort($temp);
echo "sorted array: <br>";
print_r($temp);

?>