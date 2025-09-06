<?php
 $students = array("Tripti" => 85,"Saumya" => 82,"Neha"=>78,"Anjali"=>88);

 $key = "Neha";
 
 if(array_key_exists($key, $students)){
    echo "key '$key' exists in the array with value: " .$students[$key];
 }
 else{
    echo "key '$key' does not exists in the array.";
 }

?>