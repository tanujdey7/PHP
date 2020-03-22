<?php
    $matrix = array(array(1,2,3),
                    array(2,3,4),
                    array(5,6,7)
                   );
    for($i = 0 ; $i < 3 ; $i++) {
        for($j = 0 ; $j < 3 ; $j++) {
            echo $matrix[$i][$j] ," ";
        }
        echo "<br>";
    }
?>