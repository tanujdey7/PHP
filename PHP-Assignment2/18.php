<?php
    //"Newton"=>"Gravity","Albert"=>"Energy" ,"Edison"=> "Bulb","Tesla"=> "AC"
    $science = array("Newton" => "Gravity" , "Albert" => "Energy" , "Edison" => "Bulb" , "Tesla" => "AC");
    foreach ($science as $key => $value) {
        echo $key." : ".$value."</br>";
    }
?>