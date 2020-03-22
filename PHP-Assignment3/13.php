<?php
    if(count($_POST)>0) {
        foreach($_POST as $key=>$value) {
            if(empty($_POST[$key])) {
                $message = ucwords($key) . " field is required";
                break;
            }
        }
        if(!isset($message)) {
            if (!filter_var($_POST["userEmail"], FILTER_VALIDATE_EMAIL)) {
                $message = "Invalid UserEmail";
            }
        }
        if(!isset($message)) {
            if(!isset($_POST["gender"])) {
            $message = " Gender field is required";
            }
        }
        if(!isset($message)) {
            if(!isset($_POST["terms"])) {
            $message = " Check the box to accept Terms and conditions";
            }
        }
        if(!isset($message)) {
            $message = "You have registered successfully!";	
            unset($_POST);
        }
    }

?>
<html>
<head>
    <title>Registration Form</title>
    <link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
    <form name="frmRegistration" method="post" action="">
    <div align="center" class="message"><?php if(isset($message)) echo $message; ?></div>
    <table border="0" cellpadding="10" cellspacing="1" width="500" align="center">
    <tr class="tableheader">
        <td align="center" colspan="2">Registration Form</td>
    </tr>
    <tr class="tablerow">
        <td align="right">Username</td>
        <td><input type="text" name="userName" value="<?php if(isset($_POST['userName'])) echo $_POST['userName']; ?>"></td>
    </tr>
    <tr class="tablerow">
        <td align="right">Password</td>
        <td><input type="password" name="password" value="<?php if(isset($_POST['password'])) echo $_POST['password']; ?>"></td>
    </tr>
    <tr class="tablerow">
        <td align="right">User Type</td>
        <td>
            <select name="userType">
            <option value="">--Select--</option>
            <option value="Member" <?php if(isset($_POST['userType']) && $_POST['userType']=="Member") { ?>selected<?php  } ?>>Member</option>
            <option value="Premium User" <?php if(isset($_POST['userType']) && $_POST['userType']=="Premium User") { ?>selected<?php  } ?>>Premium User</option>
            </select>
        </td>
    </tr>
    <tr class="tablerow">
        <td align="right">Display Name</td>
        <td><input type="text" name="displayName" value="<?php if(isset($_POST['displayName'])) echo $_POST['displayName']; ?>"></td>
    </tr>
    <tr class="tablerow">
        <td align="right">Address</td>
        <td><textarea rows="3" cols="17" name="userAddress"><?php if(isset($_POST['userAddress'])) echo $_POST['userAddress']; ?></textarea></td>
    </tr>
    <tr class="tablerow">
        <td align="right">Email</td>
        <td><input type="text" name="userEmail" value="<?php if(isset($_POST['userEmail'])) echo $_POST['userEmail']; ?>"></td>
    </tr>
    <tr class="tablerow">
        <td align="right">Gender</td>
        <td><input type="radio" name="gender" value="Male" <?php if(isset($_POST['gender']) && $_POST['gender']=="Male") { ?>checked<?php  } ?>> Male
            <input type="radio" name="gender" value="Female" <?php if(isset($_POST['gender']) && $_POST['gender']=="Female") { ?>checked<?php  } ?>> Female
        </td>
    </tr>
    <tr class="tablerow">
        <td align="right"></td>
        <td><input type="checkbox" name="terms"> I accept Terms and Conditions</td>
    </tr>
    <tr class="tableheader">
        <td align="center" colspan="2"><input type="submit" name="submit" value="Submit"></td>
    </tr>
    </table>
    </form>
    </body>
</html>
