<?php
if (isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST") {
error_reporting(0);
include('settings.php');
include('data6rst.php');

$smtp_email_host = $_POST['smtp_email_host'];
$smtp_email_username = $_POST['smtp_email_username'];
$smtp_email_password=  $_POST['smtp_email_password'];
$smtp_email_port=  $_POST['smtp_email_port'];
$timer = time();

$sms_username=  $_POST['sms_username'];
$sms_password=  $_POST['sms_password'];
$google_api_key=  $_POST['google_api_key'];

$admin_name=  $_POST['admin_name'];
$admin_email=  $_POST['admin_email'];
$admin_phone_no=  $_POST['admin_phone_no'];

// check for PHP Mailer installation Vendor Directory
 $file_p = "vendor/autoload.php";

  
if (file_exists($file_p)) 
{
    //echo "The file $file_p exists";
}
else 
{
$response = ['status' => 0, 'message' => "PHP-Emailer Server has not been Installed. Please see Readme File for installation or Contact Site Admin"];
echo json_encode($response);
exit();
}


if ($smtp_email_host == ''){

$response = ['status' => 0, 'message' => "SMTP Mail HOst is Empty"];
echo json_encode($response);

exit();
}

if ($smtp_email_username == ''){

$response = ['status' => 0, 'message' => "SMTP Mail Username is Empty"];
echo json_encode($response);
exit();
}

if ($smtp_email_password == ''){

$response = ['status' => 0, 'message' => "SMTP Mail Password is Empty"];
echo json_encode($response);
exit();
}



$result_verified = $db->prepare('select * from settings where data_type=:data_type');
$result_verified->execute(array(':data_type' =>'0'));

$rows= $result_verified->fetch();
$norows= $result_verified->rowCount();

if($norows ==1){


$update= $db->prepare('UPDATE settings SET smtp_email_host =:smtp_email_host, smtp_email_username= :smtp_email_username, smtp_email_password = :smtp_email_password,
 smtp_email_port = :smtp_email_port, sms_username =:sms_username,sms_password=:sms_password, google_api_key=:google_api_key,
admin_name =:admin_name, admin_email=:admin_email, admin_phone_no=:admin_phone_no where data_type=:data_type');
$update->execute(array(
':smtp_email_host' => $smtp_email_host,
':smtp_email_username' => $smtp_email_username,
':smtp_email_password' => $smtp_email_password,
':smtp_email_port' => $smtp_email_port,
 ':data_type' =>'0',
':sms_username' => $sms_username,
':sms_password' => $sms_password,
':google_api_key' => $google_api_key,
':admin_name' => $admin_name,
':admin_email' => $admin_email,
':admin_phone_no' => $admin_phone_no

));




$response = ['status' => 1, 'message' => "Server Configured Successfully."];
echo json_encode($response);

exit();
} 


$statement = $db->prepare('INSERT INTO settings
(smtp_email_host,smtp_email_username,data_type,smtp_email_password,smtp_email_port,sms_username,sms_password,google_api_key,admin_name,admin_email,admin_phone_no)

                          values
(:smtp_email_host,:smtp_email_username,:data_type,:smtp_email_password,:smtp_email_port,:sms_username,:sms_password,:google_api_key,:admin_name,:admin_email,:admin_phone_no)');

$statement->execute(array( 
':smtp_email_host' => $smtp_email_host,
':smtp_email_username' => $smtp_email_username,		
':data_type' => '0',
':smtp_email_password' => $smtp_email_password,
':smtp_email_port' => $smtp_email_port,
':sms_username' => $sms_username,
':sms_password' => $sms_password,
':google_api_key' => $google_api_key,
':admin_name' => $admin_name,
':admin_email' => $admin_email,
':admin_phone_no' => $admin_phone_no
));




$stmtx = $db->query("SELECT LAST_INSERT_ID()");
$lastInserted_Id = $stmtx->fetchColumn();



if($statement){


$response = ['status' => 1, 'message' => "Server Configured Successfully"];
echo json_encode($response);

}

              else {

$response = ['status' => 0, 'message' => "Server Configurations Failed. Try Again"];
echo json_encode($response);
                }



}
else{
echo "<div id='' style='background:red;color:white;padding:10px;border:none;'>
Direct Page Access not Allowed<br></div>";
}



?>

<?php ob_end_flush(); ?>
