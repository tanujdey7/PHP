<html>
<body>
<?php
    $err1 = $err2 = "";
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(empty(($_POST["Name"])))
        {
            $err1 = "Name is required";
        }
        if(empty(($_POST["email"])))
        {
            $err2="Email is required";
        }
        else
        {
            if(!preg_match("/([a-z0-9]+@[a-z0-9]+\.[a-z]{2,3})/",$_POST["email"]))
            {
                $err2 = "Invalid email";
            }
        }
    }
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    echo "INPUT:- <br>";
    echo "Name:- " . $_POST["Name"] . "<br>";
    echo "Email:- " . $_POST["email"] . "<br>";
}
?>    
<form method="POST" action="<?php echo $_SERVER["PHP_SELF"]?>">
        Name: <input type="text" name="Name"/><span><?php echo $err1 ?> </span><br><br>
        Email: <input type="text" name="email"/><?php echo $err2 ?><br><br>
        <input type="submit" value="Submit"/> 
    </form>
</body>
</html>