<?php

//$host = 'localhost'
//$user = 'root';
//$password = '';
//$dbname = 'project';
//
////  $db = new PDO( 'mysql:host=localhost;dbname=project', $user, $pass );
//
//
////Set DSN
//$dsn = 'mysql:host='.$host .';dbname='. $dbname;
//
////Create a PDO instance
//$pdo = new PDO($dsn, $user, $password);
//
//# PDO QUERY


define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'project');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE) or die ("No connection");
?>
