
<?php
//error_reporting(0);
if (isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST") {
ini_set('max_execution_time', 300);
// temporarly extend time limit
set_time_limit(300);


$access_code = trim(strip_tags($_POST['accesss_code']));
if($access_code ==''){
echo "<div style='background:red;padding:8px;color:white;border:none;'>Tidb Installations Access Code Cannot be Empty.</div>";
exit();
}

/*
 Always change the value of this access code to anything or to any value that you like so that other users cannot guess it.
For sample i set it to: tiflix_tidbhackathon2023
*/

$install_access_code ="save_humanity_tidbhackathon2023"; 

if($install_access_code !=$access_code ){
echo "<div style='background:red;padding:8px;color:white;border:none;'>Access code You Entered does not match with the Access code set on 
<b>tidb_installation_action.php</b> file.</div>";
exit();
}



// Connect to Tidb Database
include('data6rst.php');
$result = $db->query("SHOW TABLES LIKE 'welfare_reports'");
$tb_check = $result !== false && $result->rowCount() > 0;


if($tb_check){
    echo "<div style='color:white;background:red;padding:10px;border:none;'>Tidb Setup Installation Table already Created in that Database</div><br>";
exit();
	}else{



$sql1= $db->prepare("

CREATE TABLE `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(200) DEFAULT NULL,
  `msg` text DEFAULT NULL,
  `timing` varchar(20) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `userid` varchar(100) DEFAULT NULL,
  `title` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4

");
$sql1->execute(array());
if($sql1) {
  echo "<div style='color:white;background:green;padding:10px;border:none;'>Table Message  created successfully</div><br>";
} else {
  echo "<div style='color:white;background:red;padding:10px;border:none;'>Table Message creation failed</div><br>";
}



$sql2= $db->prepare("

CREATE TABLE `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sms_username` varchar(200) DEFAULT NULL,
  `sms_password` varchar(200) DEFAULT NULL,
  `google_api_key` varchar(200) DEFAULT NULL,
  `smtp_email_host` varchar(100) DEFAULT NULL,
  `smtp_email_username` varchar(100) DEFAULT NULL,
  `smtp_email_password` varchar(100) DEFAULT NULL,
  `smtp_email_port` varchar(30) DEFAULT NULL,
  `data_type` varchar(30) DEFAULT NULL,
  `admin_name` varchar(200) DEFAULT NULL,
  `admin_email` varchar(200) DEFAULT NULL,
  `admin_phone_no` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4

");
$sql2->execute(array());
if($sql2) {
  echo "<div style='color:white;background:green;padding:10px;border:none;'>Table Settings created successfully</div><br>";
} else {
  echo "<div style='color:white;background:red;padding:10px;border:none;'>Table settings creation failed</div><br>";
}






$sql3= $db->prepare("

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(100) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `fullname` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `timing` varchar(200) DEFAULT NULL,
  `token1` text DEFAULT NULL,
  `token2` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4;


");
$sql3->execute(array());
if($sql3) {
  echo "<div style='color:white;background:green;padding:10px;border:none;'>Table Users created successfully</div><br>";
} else {
  echo "<div style='color:white;background:red;padding:10px;border:none;'>Table Users creation failed</div><br>";
}




$sql4= $db->prepare("


CREATE TABLE `welfare_reports` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `case_no` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `fullname` varchar(200) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `report_type` varchar(100) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  `comments` varchar(200) DEFAULT NULL,
  `timing` varchar(200) DEFAULT NULL,
  `lat` float(10,6) DEFAULT NULL,
  `lng` float(10,6) DEFAULT NULL,
  `sms_count` varchar(20) DEFAULT NULL,
  `email_count` varchar(20) DEFAULT NULL,
  `phone_no` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4;
");
$sql4->execute(array());
if($sql4) {
  echo "<div style='color:white;background:green;padding:10px;border:none;'>Table welfare_reports created successfully</div><br>";
} else {
  echo "<div style='color:white;background:red;padding:10px;border:none;'>Table welfare_reports creation failed</div><br>";
}



}






}else{
echo "<div style='background:red;padding:8px;color:white;border:none;'>Direct Page Access Not Allowed...</div>";
}


?>























