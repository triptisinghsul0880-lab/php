<?php
$fruits = ["apple","banana","mango","grapes","orange"];
echo "Array is:";
print_r($fruits);
echo "<br>";
$value = "banana";
if(in_array($value , $fruits)){
    echo "$value exists in the array.";
}
else{
    echo "$value does not exists in the array.";
}

?>