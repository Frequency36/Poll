<?php
//error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "poll";
$dsn = "mysql:host=".$servername.";dbname=".$dbname.";charset=utf8mb4";
$options = [
  PDO::ATTR_EMULATE_PREPARES   => false, // turn off emulation mode for "real" prepared statements
  PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, //turn on errors in the form of exceptions
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //make the default fetch be an associative array
];
try {
  $link = new PDO($dsn, $username, $password, $options);
  if($link){
   // echo "connected";
   session_start();
   $user = $_SERVER["REMOTE_ADDR"];
   $_SESSION["user"]=$user;
  }
} catch (Exception $e) {
  error_log($e->getMessage());
  exit('Something weird happened'); //something a user can understand
}
?>