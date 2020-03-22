<html>
    <!--
        Tanuj Dey (C) GitHub.com/tanujdey7 
    -->
    <body>
<?php
    session_start();
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['add'] = $_POST['address'];
    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";
?>
    </body>
</html>
