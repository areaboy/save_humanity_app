<?php
error_reporting(0); 

// To use Cookies to validate logins set it to 1. To use secured php sessions to validate logins set it to 2
$sessions_validate = '2';

$site_url ='http://localhost/save_humanity/';  // Eg https://example.com/save_humanity/
$site_url2 ='http://localhost/save_humanity';  // Eg https://example.com/save_humanity


// Please Do not Edit anything Below

include('data6rst.php');
$res= $db->prepare("SELECT * FROM settings WHERE data_type =:data_type order by id desc");
$res->execute(array(':data_type' => '0'));
$row = $res->fetch();
$count = $res->rowCount();

$smtp_email_host = $row['smtp_email_host'];
$smtp_email_username = $row['smtp_email_username'];
$smtp_email_password = $row['smtp_email_password'];
$smtp_email_port = $row['smtp_email_port'];

$google_map_keys = $row['google_api_key'];
$sms_password = $row['sms_password'];
$sms_username= $row['sms_username'];

$admin_name = $row['admin_name'];
$admin_email = $row['admin_email'];
$admin_phone_no = $row['admin_phone_no'];




?>