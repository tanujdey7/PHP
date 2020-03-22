<?php
$date = "2019-07-31";
$firstday = date("Y-m-01",strtotime($date));
$lastday = date("Y-m-t",strtotime($date));
$date1 = date_create($firstday);
$date2 = date_create($lastday);
echo date_format($date1,"l");
echo date_format($date2,"l");