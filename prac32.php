<?php
$student = array("Tripti" => 85,"Saumya" => 82,"Neha"=>78,"Anjali"=>88);

$students["Tripti"] = 90;

echo"updates students and their Marks:<br><br>";
foreach ($students as $name => $Marks){
    echo $name . " scored ". $Marks . " marks.<br>";
}

?>