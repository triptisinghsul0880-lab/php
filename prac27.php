<?php
$numbers = array(12, 45, 2, 67, 34, 89, 23, 9);

echo "Original Array: <br>";
print_r($numbers);

sort($numbers);
echo "<br><br>Array in Ascending Order: <br>";
print_r($numbers);

rsort($numbers);
echo "<br><br>Array in Descending Order: <br>";
print_r($numbers);
?>
