<?php
    $array1 = array(32 , 344 , 12 , 1 , 31);
    rsort($array1);
    print_r($array1);
    echo "<br>";
    $array2 = array("GLS UNIVERSITY");
    $sort1 = implode($array2);
    $sort2 = str_split($sort1);
    rsort($sort2);
    print_r($sort2);
?>