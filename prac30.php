<?php
$countries = array("India" => "New Delhi","USA" =>"Washington, D.C", "France" => "paris","Japan" => "Tokyo","Australia"=> "canberra");

echo "List of Countris and thier Capitals:<br><br>";

foreach ($countries as $country => $capital){
    echo "the capital of ".$country."is:  ".$capital."<br>";
}


?>