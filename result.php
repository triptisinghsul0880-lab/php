<?php
if(isset($_GET['marks'])){
    $marks = $_GET['marks'];

    if($marks >= 40){
        echo "<h2>PASS</h2>";
    }
    else{
        echo "please enter marks first.";
    }
}


?>