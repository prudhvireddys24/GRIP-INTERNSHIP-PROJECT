<?php
$username = filter_input(INPUT_POST, 'username');
 $password = filter_input(INPUT_POST, 'password');
  $address = filter_input(INPUT_POST, 'address');
   $sex = filter_input(INPUT_POST, 'sex');
    $age = filter_input(INPUT_POST, 'age');
 
 
 
 if (!empty($username)){
if (!empty($password)){

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "pharmacy";

// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
  $sql = "INSERT INTO patient (username, password, address, sex, age)
  values ('$username','$password','$address','$sex','$age')";
  if ($conn->query($sql)){
    echo "New record is inserted sucessfully";
    session_start();
        $_SESSION['anything']='something';
        header('location:index.html');
  }
  else{
    echo "Error: ". $sql ."
". $conn->error;
  }
  $conn->close();
}
}
else{
  echo "Password should not be empty";
  die();
}
 }
 else{
  echo "Username should not be empty";
  die();
 }
 ?>