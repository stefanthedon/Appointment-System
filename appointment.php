<?php
   include("config.php");

    if($_SERVER["REQUEST_METHOD"] == "POST") {
// data sent from form 
      
      $f_name = mysqli_real_escape_string($db,$_POST['f_name']);
      $l_name = mysqli_real_escape_string($db,$_POST['l_name']);
      $gender = mysqli_real_escape_string($db,$_POST['radio']);
      $telephone = mysqli_real_escape_string($db,$_POST['telephone']);
      $email = mysqli_real_escape_string($db,$_POST['email']);
      $date = mysqli_real_escape_string($db,$_POST['date']);
        
    $sql = "INSERT INTO bookings (f_name, l_name, gender, telephone, email, date) VALUES ('$f_name', '$l_name', '$gender', '$telephone', '$email', '$date')";
        
    if (!mysqli_query($db, $sql)) {
        die ('error inserting new record');
    } 
        $newrecord = "1 record added to the database";
        
    }
