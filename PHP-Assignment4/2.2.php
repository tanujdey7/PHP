<?php
    setcookie('name',$_POST['name'],time()+120);
    setcookie('add',$_POST['address'],time()+120);
    print_r($_COOKIE);
    echo "<br>Name is: ".$_COOKIE['name']."<br>";
    echo "Address is: ".$_COOKIE['add']."<br>";
?>