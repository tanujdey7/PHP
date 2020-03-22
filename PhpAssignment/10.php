<html>
<head>
    <title>PHP Form</title>
</head>
<?php
    if(isset($_POST["add"]))
    {
        if(!empty($_POST["value1"]) || !empty($_POST["value2"]))
            $result = $_POST["value1"] + $_POST["value2"];
    }
    if(isset($_POST["sub"]))
    {
        if(!empty($_POST["value1"]) || !empty($_POST["value2"]))
            $result = $_POST["value1"] - $_POST["value2"];
    }
    if(isset($_POST["multiply"]))
    {
        if(!empty($_POST["value1"]) || !empty($_POST["value2"]))
            $result = $_POST["value1"] * $_POST["value2"];
    }
    if(isset($_POST["divide"]))
    {
        if(!empty($_POST["value1"]) || !empty($_POST["value2"]))
           $result = $_POST["value1"] / $_POST["value2"];
    }
?>
<body style="background-color:grey;">
    <h2 style="color:purple;">Form with Multiple Submit Button</h2>
    <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST">
    <table>
    <tr>
        <td>Value1</td>
        <td><input type="text" name="value1"/></td>
    </tr>
    <tr>
        <td>Value2</td>    
        <td><input type="text" name="value2"/></td>
    </tr>
    <tr>
        <td>Result</td>    
        <td><input type="text" name="result" value="<?php if(isset($result)) echo $result;?>"/></td>
    </tr>
    <tr>    
        <td><input type="submit" value="add" name="add"/></td>
        <td><input type="submit" value="sub" name="sub"/></td>
    </tr>
    <tr>
        <td><input type="submit" value="multiply" name="multiply"/></td>
        <td><input type="submit" value="divide" name="divide"/></td>
    </tr>
    </table>         
    </form>
</body>
</html> 