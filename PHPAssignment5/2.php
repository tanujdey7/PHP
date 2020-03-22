<html>
<head>
    <style>
    table tr,td
    {
        padding:10px;
    }
    </style>
</head>
<body>

<h1>Register Here!</h1>
<p>Fill in your name and email address, then click <b>Submit</b> to register.
<form action="2.php" method="POST">
    Name: <input type="text" name="name"/><br>
    Email: <input type="email" name="email"/><br>
    <input type="submit" name="submit" value="submit"/><br>
</form>
<h1>People who are registered:</h1>
<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Date</th>
    </tr>    
<?php
    $servername="localhost";
    $username="root";
    $db = "test";
    $con = mysqli_connect($servername,$username,"",$db);
    if(!$con)
        die("Connection error:- " + mysqli_connect_error());

    $table = "CREATE TABLE Registration
    (
        Name varchar(20),
        Email varchar(30),
        Date date
    );";

    mysqli_query($con,$table);

    if(isset($_POST["submit"]))
    {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $date = date("Y-m-d");
        $mysql = "INSERT INTO Registration(Name,Email,Date) VALUES('$name','$email','$date');";
        $con->query($mysql);
        echo mysqli_error($con);
    }
    $mysql1 = "SELECT * FROM Registration";
    $result = $con->query($mysql1);
    if($result->num_rows > 0)
    {
        while($row=mysqli_fetch_row($result))
        {
            echo "<tr>";
            echo "<td>" . $row[0] . "</td>";
            echo "<td>" . $row[1] . "</td>";
            echo "<td>" . $row[2] . "</td>";
            echo "</tr>";
        }
    }
    echo "</table>";
?>
</body>
</html>