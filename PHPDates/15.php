<?php
$date = new DateTime("2019-07-27");
if(date_format($date,"w") == "0" || date_format($date,"w") == "6")
{
    echo "Weekend";
}
else{
    echo "Weekday";
}
?>