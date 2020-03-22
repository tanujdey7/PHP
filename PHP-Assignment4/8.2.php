<html>
    <!-- 
        Tanuj Dey (c) github.com/tanujdey7
    -->
    <body>
        <?php
            if(!empty(@$_POST['submit'])) {
                setcookie('uname',$_POST['uname'],time()+10);
                setcookie('cname',$_POST['cname'],time()+10);
                print_r($_COOKIE);
            }
        ?>
    </body>
</html>