<?php
$fruits = array("apple"=> 120,"banana"=>40,"mango"=>100,"orange"=>60);

asort($fruits);
echo "<br>Fruits sorted by prices:<br><br>";
foreach($fruits as $fruit => $price){
    echo $fruit . " = ".$price. "<br>";
}
echo "<br>";
ksort($fruits);
echo "<br>Fruits sorted by Names:<br><br>";
foreach($fruits as $fruit => $price){
    echo $fruit . " = ".$price. "<br>";
}


?>