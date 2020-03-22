<html>
    <!--
        Tanuj Dey (C) GitHub.com/tanujdey7 
    -->
    <body>
    <?php
        if((@$_POST['submit'])) {
            session_start();
            $_SESSION['name'] = $_POST['uname'];
            $_SESSION['age'] = $_POST['age'];
            $_SESSION['start'] = time();
            $_SESSION['destroy'] = $_SESSION['start'] + (10);
            echo "Session Saved<br>";
            print_r($_SESSION);
            header('Location: 3.2.php');
        }

    ?>
        <form action="" method="post">
            Name: <input type="text" name="uname"><br>
            Age: <input type="text" name="age"><br>
            <input type="submit" name="submit" value="Submit">
        </form>
    </body>
</html>