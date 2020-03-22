<?php
    $date1 = new DateTime("2000-02-01");
    $date2 = new DateTime(date("Y-m-d"));
    $int = date_diff($date1,$date2);
    echo $int -> days;
?>  