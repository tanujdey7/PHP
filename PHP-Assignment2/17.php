<?php
    //Create an associative array which stores details of directions. Like Up=>North, Down=>South,
    //Left=>West, Right=>East. Display the keys and values seperately
    $dir = array("Up" => "North" , "Down" => "South" , "Left" => "West" , "Right" => "East");
    $key = array_keys($dir);
    $value = array_values($dir);
    for($i = 0 ; $i < 4 ; $i++) {
        echo "Keys: " , $key[$i]." ";
        echo "<br>";
    }
    for($i = 0 ; $i < 4 ; $i++) {
        echo "Values: " , $value[$i]." ";
        echo "<br>";
    }
?>