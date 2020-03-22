<?php
    $a = strtotime("1981-11-04 00:00:00");
    $b = strtotime("2013-09-04 00:00:00");
    $diff = $b - $a;
    $year = abs(floor($diff/(86400*365)));
    echo $year ." Years ";
    
    $c = $diff%(365*24*60*60);
    $month = floor($c/(30*60*60*24));
    $d = $c%(30*60*60*24);
    $days = $d/(60*60*24);
    echo $month ."<br>";
    echo $days . "<br>";


?>