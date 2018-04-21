<!DOCTYPE html>
<? php
include('booking.php');
?>

<html lang="">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/fonts/flaticon.css">
  <title>Admin Panel</title>
</head>

<body>
  <div id="header">
      <div class="logo">
          <a href=""><img src="assets/img/logo.png" alt=""></a>
      </div>
  </div>
  <div id="container">
      <div class="sidebar">
          <ul id="nav">
              <li><a class="selected flaticon-home" href="">Dashboard</a></li>
              <li><a class="flaticon-man-user" href="">Account</a></li>
              <li><a class="flaticon-multiple-users-silhouette" href="">Clients</a></li>
              <li><a class="flaticon-close-envelope" href="">Inbox</a></li>
              <li id="log-out"><a href="logout.php">Log Out</a></li>
          </ul>
      </div>
      <div class="content">
          <h1>Dashboard</h1>
          <p>Today's Appointments</p>
          <br><br>
          <div id="box">
              <div id="box-top"><?php echo $date ?></div>
              <div id="box-panel"><?php echo $f_name, l_name  ?></div>
          </div>
          <div id="div"></div>
      </div>
  </div>
  
<script src="assets/js/main.js"></script>
</body>

</html>