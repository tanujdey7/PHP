<?php
    $date = new DateTime(date("Y-m-d"));
    echo date_format($date,"F");
    echo date("F");