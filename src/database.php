<?php


$database_config = parse_ini_file("config.ini");


$host = $database_config['host'];
$user = $database_config['user'];
$pass = $database_config['password'];
$db = $database_config['database'];
$debug = $database_config['debug'];

try {
$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//
if ($database_config['debug'])
{
echo("Connected.");
echo "<pre>";
print_r( $database_config );
echo "</pre>";
}
}
catch(PDOException $e)
{
  if ($database_config['debug'])
  {
    echo "Connection failed: \n" . $e->getMessage();
  }
  else {
    echo "There's something wrong.";
  }

}


 ?>
