<!DOCTYPE html>
<html>
<head>
	<title>
		Patient tables
	</title>
	<style >
#ctstyle
 {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#ctstyle td, #ctstyle th {
    border: px solid #ddd;
    padding: 8px;
}

#ctstyle tr:nth-child(even){background-color: #f2f2f2;}

#ctstyle tr:hover {background-color: #ddd;}

#ctstyle th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #07f7f3;
    color: white;
}		
	</style>
</head>
<body>
	<h2 align="center">patient table</h2>
<table id="ctstyle">
	<tr>
		
        <th>id</th>
        <th>username</th>
        <th>address</th>
        <th>sex</th>
        <th>age</th>
	</tr>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pharmacy";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id,username,password,address,sex,age FROM patient";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>" . $row["id"]."</td>
        <td>" . $row["username"]. "</td>
        <td>" . $row["address"]."</td>
        <td>" . $row["sex"]. "</td>
        <td>" . $row["age"]."</td>
        

        </tr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</table>


<button onclick="myFunction()">Print this page</button>

<script>
function myFunction() {
    window.print();
}
</script>


</body>
</html>