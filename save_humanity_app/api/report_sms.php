<?php
error_reporting(0);
if (isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST") {
include('settings.php');



$report_typex = strip_tags($_POST['report_type']);
$fullname = strip_tags($_POST['fullname']);
$sms_msg ="Reports from $fullname. Report Title: -- $report_typex";

$message =$sms_msg;
$mobiles =$admin_phone_no;
$sms_sender=$fullname;
$url ="https://portal.nigeriabulksms.com/api/?username=$sms_username&password=$sms_password&message=$message&sender=$sms_sender&mobiles=$mobiles";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, TRUE);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
//curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$output = curl_exec($ch); 



$http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);

// catch error message before closing
if (curl_errno($ch)) {
    //echo $error_msg = curl_error($ch);
}

curl_close($ch); 



if($output ==''){

echo "<div id='alertdata_uploadfiles_o' style='background:red;color:white;padding:10px;border:none;'>
There is an Issue Sending SMS. Please Ensure there is Internet Connections and Try Again</div><br>";
exit();
}



$json = json_decode($output, true);
$status = $json['status'];
$errorx = $json['error'];

if($errorx !=''){
echo "<div style='color:white;background:red;padding:10px;'>SMS Sending Failed. Error: $errorx</div><br>";
exit();
}


if($status =='OK'){
echo "<br><div style='color:white;background:green;padding:10px;'>SMS Sent Successfully To Admin. SMS status: $status</div><br>";
}else{
echo "<br><div style='color:white;background:red;padding:10px;'>SMS Sending Failed. Ensure there is Internet Connection</div><br>";

}



}
else{
echo "<div id='' style='background:red;color:white;padding:10px;border:none;'>
Direct Page Access not Allowed<br></div><br>";
}


?>


