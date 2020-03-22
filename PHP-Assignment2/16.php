 <?php
    $students = array( "X" => array("Physics" => 78 , "Maths" => 89),
                    "Y" => array("Physics" => 67 , "Maths" => 78),
                    "Z" => array("Physics" => 56 , "Maths" => 90)
                );
               foreach($students as $sname => $marks)
               {
                   echo $sname . "<br>";
                   foreach($marks as $key => $value)
                   {
                       echo $key . " = " . $value . "<br>";
                   }
               } 
?>