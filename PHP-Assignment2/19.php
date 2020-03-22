<?php
    $movies = array(
        0 => array(
            "Pink Panther" , "Comedy"
            ),
        1 => array(
            "John English" , "Comedy"
            ),
        2 => array(
            "Die Hard" , "Action"
            ),
        3 => array(
            "John Wick" , "Action"
            ),
        4 => array(
            "The lords of the rings" , "Epic"
            ),
        5 => array(
            "Romeo and Juliet" , "Romance"
            ),
        6 => array(
            "See no evil hear no evil" , "Comedy"
            ),
        );
?>
<table border = '1'>
<tr>
<th> Movies </th>
<th> Category </th>
<?php
    $count = 0;
    foreach ($movies as $movie) {
        echo "<tr>";
        foreach ($movie as $key) {
            echo "<td>" , $key , "</td>";
            $count++;
        }
        echo "</tr>";
    }
    echo "</br> Total number of elements: ",$count;
?>
</table>