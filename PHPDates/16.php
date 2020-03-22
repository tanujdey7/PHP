<?php
$date = new DateTime("2011-01-01");
$date->sub(new DateInterval('P40D'));
echo date_format($date,"Y-m-d"). "</br>";
$date = new DateTime("2011-01-01");
$date->add(new DateInterval('P40D'));
echo date_format($date,"Y-m-d");