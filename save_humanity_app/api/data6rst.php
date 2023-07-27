<?php
error_reporting(0); 
$servername = "tidb server or hostname goes here";
$username = "tidb username goes here";
$password = "tidb password goes here";
$port = 4000;
$db_name ="save_humanity_db";
$options = array(
	//PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
	PDO::MYSQL_ATTR_SSL_CA => 'cacert-2023-05-30.pem',
	PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT => 'VERIFY_IDENTITY',
);
try {
$db = new PDO("mysql:host=$servername;port=$port;dbname=$db_name;charset=utf8", $username, $password, $options);
    // set the PDO error mode to exception
    //$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 //echo "Tidb Connected successfully ok."; 
}
catch(PDOException $e)
    {
   // echo "Connection failed: " . $e->getMessage();
echo "<div style='color:white;background:red;padding:10px;border:none;'>Connection to TIDB Cloud Database Failed...Check your TIDB Credentials and Internet as well</div>";
}






