<!DOCTYPE html>
<html>
<head>
    <title>
        user booking 
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
    <h2>User booking details</h2>
<table id="ctstyle">
    <tr>
        
        <th>Bill no</th>
        <th>Username</th>
        <th>Doctor name</th>
        <th>total</th>
       </tr>

      
<?php
$id = filter_input(INPUT_POST, 'id');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pharmacy";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT  bill_no, username, doc_name,total  FROM patient p,doctor d,bill b where b.p_id=p.id and p.id=d.p_id";

$result = mysqli_query($conn, $sql);



if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>" . $row["bill_no"]."</td>
        <td>" . $row["username"]. "</td>

        <td>" . $row["doc_name"]."</td>
        <td>" . $row["total"]. "</td>
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