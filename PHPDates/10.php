<?php
    $date = date_create("2019-07-31");
    $year = date_format($date,"Y");
    $month = date_format($date,"m");
    $d = date_format($date,"d");
    if(checkdate($month,$d,$year))
    {
        echo "Date is Valid";
    }
    else
    {
        echo "Date is not Valid";
    }
?>