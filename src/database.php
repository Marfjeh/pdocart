<?php
//$database_config = parse_ini_file("config.ini");
require("config.php");
if($database_config['debug'] == "1"){
  echo "<pre>";
  print_r( $database_config);
  echo "</pre>";
}
try {
  $conn = new PDO("mysql:host=".$database_config['host'].
  ";dbname=".$database_config['database'],
  $database_config['user'],
  $database_config['password']);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  if($database_config['debug'] == "1"){
    echo "Connected successfully";
  }
}
catch(PDOException $e)
{
  if($database_config['debug'] == "1"){
  echo "Connection failed: " . $e->getMessage();
}
}
?>
