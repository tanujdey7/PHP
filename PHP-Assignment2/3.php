<?php
    function floyd() {
        $count = 1;
        $space = " ";
        for($i = 0 ; $i < 5 ; $i++) {
            for($j = 0 ; $j <= $i ; $j++) {
                echo "$count ";
                $count++;
            }    
            echo "</br>";
        }
    }
    function binary() {
        for($i = 0 ; $i < 5 ; $i++) {
            for($j = 0 ; $j <= $i ; $j++) {
                if(($i+$j) % 2 == 0) {
                    echo "1 ";
                } else {
                    echo "0 ";
                }
            }    
            echo "</br>";
        }
    }
    function pattern($n) {
        for ($i = 1; $i <= $n; $i++) { 
            for ($j = 1; $j <= $n; $j++) { 
                if($j<=($n-$i)){ 
                    echo " "." "; 
                      
                }
                else { 
                    echo "* "; 
                }       
            } 
            echo "</br>"; 
        }  
    }
    floyd();
    binary();
    pattern(5);
?>