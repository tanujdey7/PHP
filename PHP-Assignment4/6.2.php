    <!-- 
        Tanuj Dey (c) github.com/tanujdey7
    -->
<?php
    if(!empty(@$_POST['remember'])) {
        setcookie('username',$_POST['uname'],time()+3600); 
        setcookie('password',$_POST['pass'],time()+3600);
        echo "Cookies set successfully";
    }
    else {
        setcookie('username','',time()+3600); 
        setcookie('password','',time()+3600);
        echo "Cookies not set";    
    }
?>
<a href="6.php">Go to Login Page </a>