<?php
   $dbhost = "localhost";
   $dbuser = "root";
   $dbpass = "";
   
   $conn = @mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = 'SELECT * FROM patient';
   mysql_select_db('pharmacy');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
      echo "patient id:{$row['id']}  <br> ".
         "username name : {$row['username']} <br> ".
         "address : {$row['address']} <br> ".
         "sex : {$row['sex']} <br> ".
         "age : {$row['age']} <br> ".
         "--------------------------------<br>";
   }
   
   echo "Fetched data successfully\n";
   
   mysql_close($conn);
?>