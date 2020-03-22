<?php
    $student = array('1' => 43 , '2' => 65 , '3' => 85 , '4' => 25 , '5' => 65);
    print_r ($student);
    echo "<table border = '1'>
        <tr>
        <td>SEM</td>;
        <td>Marks</td>
        </tr>";
    foreach ($student as $key => $value) {
        echo "<tr>";
        echo "<td>",$key,"</td>";
        echo "<td>",$value,"</td>";
        echo "</tr>";
    }
    echo "</table>";
?>