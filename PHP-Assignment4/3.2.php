    <!-- 
        Tanuj Dey (c) github.com/tanujdey7
    -->
<?php
    session_start();
    if(time()>$_SESSION['destroy']) {
        session_destroy();
        echo "Session Destroyed";
    }
    else {
        echo "Session will destroy in 10seconds";
    }
?>