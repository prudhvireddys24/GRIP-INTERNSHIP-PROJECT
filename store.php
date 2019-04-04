



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #5b32b4;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
</head>
<body>
   <form class="modal-content animate" method="post" action="store.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar2.png" alt="" class="avatar">
    </div>

    <div class="container">
      <label for="d_id"><b>drugid</b></label>
      <input type="text" placeholder="Enter drugid" name="d_id" required>

      <label for="doc_id"><b>doctor id</b></label>
      <input type="text" placeholder="Enter doctor id" name="doc_id" required>
      
      <label for="d_name"><b>drugname</b></label>
      <input type="text" placeholder="Enter drugname" name="d_name" required>
<br>
      <label for="mf_date"><b>MF date</b></label>
      <input type="text" placeholder="Enter yy-mm-dd" name="mf_date" required>

      <label for="exp_date"><b>exp date</b></label>
      <input type="text" placeholder="Enter yy-mm-dd" name="exp_date" required>

      <label for="quantity"><b>quantity</b></label>
      <input type="text" placeholder="Enter quantity" name="quantity" required>

      <label for="cost"><b>cost</b></label>
      <input type="text" placeholder="Enter cost" name="cost" required>
        

      <button type="submit" href=bill.php>submit</button>
      
    </div>

    
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>














<?php
$d_id = filter_input(INPUT_POST, 'd_id');
 $doc_id = filter_input(INPUT_POST, 'doc_id');
  $d_name = filter_input(INPUT_POST, 'd_name');
   $mf_date = filter_input(INPUT_POST, 'mf_date');
    $exp_date = filter_input(INPUT_POST, 'exp_date');
      $quantity = filter_input(INPUT_POST, 'quantity');
        $cost = filter_input(INPUT_POST, 'cost');
 
 
 
 if (!empty($d_id)){
if (!empty($doc_id)){

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "safe house systemds";

// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
  $sql = "INSERT INTO store (d_id, doc_id, d_name, mf_date, exp_date,quantity,cost)
  values ('$d_id','$doc_id','$d_name','$mf_date','$exp_date','$quantity','$cost')";
  if ($conn->query($sql)){
    echo "New record is inserted sucessfully";
  }
  else{
    echo "Error: ". $sql ."
". $conn->error;
  }
  $conn->close();
}
}
else{
  echo "drug id should not be empty";
  die();
}
 }
 else{
  echo "doctor name should not be empty";
  die();
 }
 ?>