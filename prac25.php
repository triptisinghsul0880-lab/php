<?php
$numbers = array(12, 45, 2, 67, 34, 89, 23, 5);
$smallest = $numbers[0];
$largest = $numbers[0];
foreach ($numbers as $num) {
    if ($num < $smallest) {
        $smallest = $num;
    }
    if ($num > $largest) {
        $largest = $num;
    }
}
echo "Smallest number: " . $smallest . "<br>";
echo "Largest number: " . $largest . "<br>";
?>



