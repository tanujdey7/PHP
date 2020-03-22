<?php
    $marks = array(1 => 43 , 2 => 65 , 3 => 85 , 4 => 25 , 5 => 65);
    asort($marks);
    echo "<table border = '1'>";
    echo "<tr>";
    echo "<td> Sem </td>";
    echo "<td> Marks </td>";
    echo "</tr>";
    $keys = array_keys($marks);
    $values = array_values($marks);
    for($i = 0 ; $i < 5 ; $i++) {
        echo "<tr>";
        echo "<td>";
            echo $keys[$i];
        echo "</td>";
        echo "<td>";
            echo $values[$i];
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";

?>