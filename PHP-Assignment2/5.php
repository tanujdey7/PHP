<?php
    $cars = array(
        array("#1","Honda CRV" , "Petrol") ,
        array("#2","Brezza" , "Diesel") ,
        array("#3","Nano" , "CNG") ,
        array("#4","Amaze" , "Petrol") ,
        array("#5","Cruz" , "Diesel") 
    );
    echo "<table border = '1'
            <tr>
            <td> Sr.No </td>
            <td> Name </td>
            <td> Type </td>";
    foreach ($cars as $i) {
        echo "<tr>";
        foreach ($i as $key) {
            echo "<td>", $key ,"</td>";
        }
        echo "</tr>";
    }
?>