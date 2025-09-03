<?php
 $numbers = array (10,20,30,40,50);
 echo "Array Elements: <br>";
 print_r($numbers);
 echo "<br> <br>";
 $sum1= array_sum($numbers);
 echo "Sum using array_sum()=".$sum1 ."<br>";
 $sum2= 0;
foreach($numbers as $num){
$sum2=$sum2+$num;
}
echo "sum using for each loop = " .$sum2."<br>";



?>