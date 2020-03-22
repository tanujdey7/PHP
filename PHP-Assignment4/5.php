<html>
    <!-- 
        Tanuj Dey (c) github.com/tanujdey7
    -->

    <body>
        <form action="" method="post" enctype="multipart/form-data">
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
                    <td>Mobile</td>
                    <td><input type="number" name="mno"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" name="submit" value="Submit"></td>
                </tr>
            </table>
        </form>
    <?php
        if(@$_POST['submit']) {
            echo "Username: ".$_POST['uname']."<br>";
            echo "Mobile Number: ".$_POST['mno']."<br>";
            header('Refresh: 5;url = 5.php');
        }
    ?>
    </body>
</html>