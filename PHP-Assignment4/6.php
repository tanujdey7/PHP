<html>
    <!-- 
        Tanuj Dey (c) github.com/tanujdey7
    -->
   
    <body>
        <form action="6.2.php" method="post" enctype="multipart/form-data"> 
            <table>
                <tr>
                    <td>Username </td>
                    <td><input type="text" name="uname"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="pass"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">Remember Me: <input type="checkbox" name="remember"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" name="submit" value="Submit"></td>
                </tr>
            </table>
        </form>
        <?php
            echo "Username is: ".$_COOKIE['username']."<br>";
            echo "Password is: ".$_COOKIE['password'];
        ?>

    </body>
</html>