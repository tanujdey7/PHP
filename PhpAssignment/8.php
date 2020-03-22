<html>
<head>
<title>PHP Form</title>
<style>
table td
{
    padding:20px;
}
input,textarea
{
    border-radius: 3px;
}
input:not(:placeholder-shown)
{
    border-color: red;
}
input:valid
{
    border-color: green;
}
</style>
</head>
<body>
<?php
    $cl = "";
    
?>
<form action="<?php echo $_SERVER["PHP_SELF"]   ?>" method="GET">
    <h3 style="padding-left:50px;">Please Contact Us</h3>
    <table style="padding-left:50px;">
        <tr>
            <td>Name<span style="color:red;"> *</span></td>
            <td><input type="text" name="Name" title="Enter Valid Name" class="<?=$cl?>" required placeholder="name" pattern="[A-Za-z]{5,}"/></td>
        </tr>
        <tr>
            <td>Email <span style="color:red;"> *</span></td>
            <td><input type="text" name="email" title="Invalid Format" class="<?php echo $cl2 ?>" required/></td>
        </tr>
        <tr>
            <td>Phone <span style="color:red;"> * </span></td>
            <td><input type="text" name="phonef" placeholder="+91" size="1px">---<input type="text" name="phone" title="Enter 10 digit Number" class="<?php echo $cl3 ?>"/></td>
        </tr>
        <tr>
            <td>Regarding</td>
            <td><select name="GQ">
                    <option name="A">A</option>        
                    <option name="B">B</option>        
                    <option name="C">C</option>        
                    <option name="D">D</option>
                </select>     
            </td>
        </tr>
        <tr>
            <td>Message<span style="color:red;">*</span></td>
            <td><textarea name="message" rows="10" cols="25" class="<?php echo $cl4 ?>"></textarea>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="submit"/>
        </tr>                        
    </table>
</form>
</body>
</html>