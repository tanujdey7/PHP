<html>
<body>
<form action="1.php" method="POST">
<table style='border:1px solid black;width:100%;text-align:center;'>
        <tr>
            <td>
                Keyword<input type='text' name='svalue'/>
                <input type='submit' name='search' value='search'/>
            </td>
        </tr>
    </table></form><br><br><br>
    <table style='border:1px solid black;width:100%;text-align:center;'>
        <tr>
            <th>CustomerID</th>
            <th>Name</th>
            <th>Email</th>
            <th>CountryCode</th>
            <th>Budget</th>
            <th>Used</th>
        </tr>
<?php
    $servername="localhost";
    $db="test";
    $con = mysqli_connect($servername,"root","",$db);
    if(!$con)
        die("Connection error: " + mysqli_connect_error());
     
    if(isset($_POST["search"]))
    {
        $name = $_POST["svalue"];
        $mysql = "SELECT * from customer where Name like '$name'";
        $result = $con->query($mysql);
        
        if($result->num_rows > 0)
        {
            while($rows = $result->fetch_assoc())
            {
                echo "<tr>";
                echo "<td>" . $rows['CustomerID'] . "</td>";
                echo "<td>" . $rows['Name'] . "</td>";
                echo "<td>" . $rows['Email'] . "</td>";
                echo "<td>" . $rows['CountryCode'] . "</td>";
                echo "<td>" . $rows['Budget'] . "</td>";
                echo "<td>" . $rows['Used'] . "</td>";
                echo "</tr>";
            }
        }
    }
    echo "</table>";
?>

</body>
</html>