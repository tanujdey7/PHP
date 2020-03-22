<?php
    $salaries = array("atul" => 2000, "ravi" => 1000, "rahul" => 500);
    print_r($salaries);
    echo "<br>";
    asort($salaries);
    print_r($salaries);
    echo "<br>";
    ksort($salaries);
    print_r($salaries);
    echo "<br>";
    arsort($salaries);
    print_r($salaries);
    echo "<br>";
    krsort($salaries);
    print_r($salaries);
    echo "<br>";     
?>