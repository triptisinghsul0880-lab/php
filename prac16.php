<?php
echo "using for loop:<br>";
for($i = 1; $i<=20; $i++){
    echo $i . " ";
}
echo "<br><br>";
echo "Using while loop: <br>";
$i = 1;
while($i <= 20){
    echo $i ." ";
    $i++;
}
echo "<br><br>";
echo "Using do while loop: <br>";
$i = 1;
do{
    echo $i. " ";
    $i++;
}
while($i<=20);
?>