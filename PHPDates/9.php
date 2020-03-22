<?php
    $date = date_create("2019-07-31");
    echo date_format($date,"l") . " the " . date_format($date,"dS");
?>