<?php
   include("config.php");
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
// username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id FROM signin WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      
// If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         header("location: book.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   
   }


////POST
//
//$username = $_POST['username'];
//$password = $_POST['password'];
//
////PREVENT INJECTION
//
//$username = stripcslashes($username);
//$password = stripcslashes($password);
//$username = mysqli_real_escape_string($username);
//$password = mysqli_real_escape_string($password);
//
//
////CONNECT TO SERVER AND CONNECT DB
//
//mysql_connect("localhost", "root", "");
//mysql_select_db("project");
//
////QUERY DB
//
//$result = mysql_query("select * from signin where username = '$username' and password = '$password'") or die ("Failed to query database ".mysql_error());
//
//$row = mysql_fetch_array($result);
//if ($row['username'] == $username && $row['password'] == $password) {
//    echo "Login Success!!! Welcome ".$row['username'];
//} else {
//    echo "Failed to login!";
//}

?>