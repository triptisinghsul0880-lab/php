<?php
$numbers = array(10,20,30,40,20,50,30);
echo "Original Array: <br>";
print_r($numbers);
echo "<br><br>";
$uniqueNumbers = array_unique($numbers);//remove duplicates value
echo "array after removing duplicates:<br>";
print_r($uniqueNumbers);


?>