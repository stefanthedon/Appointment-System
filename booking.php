<?php
   include("config.php");
        

    $sql = "SELECT * FROM bookings";
    $result = mysqli_query($query) or die(mysql_error());;

    while($row = mysql_fetch_assoc($result)) {
    $f_name = $row['f_name'];
    $l_name = $row['l_name'];
    $date = $row['date'];
        
}

?>
