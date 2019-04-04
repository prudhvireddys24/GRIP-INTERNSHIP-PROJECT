<!DOCTYPE html>
<html>
<head>
	<title>
		store tables
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
    background-color: #7575a3;
    color: white;
}		
	</style>
</head>
<body>
	<h2>patient table</h2>
<table id="ctstyle">
	<tr>
		
        <th>d_id</th>
        <th>doc-id</th>
        <th>drug_name</th>
        <th>manufacture date</th>
        <th>expiry date</th>
        <th>quantity</th>
        <th>cost</th>
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

$sql = "SELECT d_id,doc_id,d_name,mf_date,exp_date,quantity,cost FROM store";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>" . $row["d_id"]."</td>
        <td>" . $row["doc_id"]."</td>
        <td>" . $row["d_name"]. "</td>
        <td>" . $row["mf_date"]."</td>
        <td>" . $row["exp_date"]. "</td>
        <td>" . $row["quantity"]."</td>
        <td>" . $row["cost"]."</td>
        
        

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