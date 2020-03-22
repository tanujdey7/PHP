<!DOCTYPE html>
<html>
<body>
    <?php
        echo "<table border = '1'>";
        for($i = 1 ; $i <=10 ; $i++) {
            echo "<tr>";
            for($j = 1 ; $j <=10 ; $j++) {
                echo "<th>" , "$i x $j = ",  $i * $j , "</th>";
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>
