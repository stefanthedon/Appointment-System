<?php
   include("config.php");

    if($_SERVER["REQUEST_METHOD"] == "POST") {
// data sent from form 
      
      $name = mysqli_real_escape_string($db,$_POST['name']);
      $email = mysqli_real_escape_string($db,$_POST['email']);
      $message = mysqli_real_escape_string($db,$_POST['message']);
      
        
    $sql = "INSERT INTO contact (name, email, message) VALUES ('$name', '$email', '$message')";
        
    if (!mysqli_query($db, $sql)) {
        die ('error inserting new record');
    } 
        $newrecord = "1 record added to the database";
        
    }
