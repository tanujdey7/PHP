<?php
/*
$a = "02-01-2020";
$b = date("d-m-Y");
$c = strtotime($a) - strtotime($b);
$d =abs(round($c/86400));
echo $d;*/
$date1 = new DateTime("02-01-2020");
$date2 = new DateTime(date("Y-m-d"));
$int = date_diff($date1,$date2);
echo $int->days;
?>