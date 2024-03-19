<?php
$username = 'mattmis1';
$password = 'g93:N41ynAB-qK';
$hostname = '45.79.205.30';
$database = 'mattmis1_portfolio';
$cnxn = @mysqli_connect($hostname, $username, $password, $database) or
die("Error Connecting to DB: " . mysqli_connect_error());
// echo 'connected to Database!';
?>
