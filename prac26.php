<?php
$numbers = array(10, 20, 30, 40, 50, 60);

echo "<h3>Original Array:</h3>";
print_r($numbers);
echo "<h3>Array in Reverse Order (Without using array_reverse):</h3>";

for($i = count($numbers) - 1; $i >= 0; $i--) {
    echo $numbers[$i] . " ";
}

echo "<h3>Array in Reverse Order (With using array_reverse):</h3>";

$reversed = array_reverse($numbers);
print_r($reversed);
?>
