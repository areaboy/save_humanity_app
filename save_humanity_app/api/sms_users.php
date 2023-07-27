<?php
error_reporting(0);
if (isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST") {
include('settings.php');
include('data6rst.php');



$sender_name = $admin_name;
$sender_email = $admin_email;

$sms_message = strip_tags($_POST['sms_message']);
$email = strip_tags($_POST['email']);
$fullname = strip_tags($_POST['fullname']);

$userid = strip_tags($_POST['userid']);
echo $phone_no = strip_tags($_POST['phone_no']);
$timer1 = time();
$sms_title = "SMS from $sender_name";


$sms_msg ="Message from $sender_name, $sms_message";


$message =$sms_msg;
$mobiles =$phone_no;
$sms_sender=$sender_name;
$url ="https://portal.nigeriabulksms.com/api/?username=$sms_username&password=$sms_password&message=$message&sender=$sms_sender&mobiles=$mobiles";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, TRUE);
//curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', "Ocp-Apim-Subscription-Key: "));  
//curl_setopt($ch, CURLOPT_POSTFIELDS, $data_param);
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
echo "<div style='color:white;background:red;padding:10px;'>SMS Sending Failed. Error: $errorx</div>";
exit();
}


if($status =='OK'){


$res= $db->prepare("SELECT * FROM welfare_reports where id=:id");
$res->execute(array(':id' =>$userid));
$t_row = $res->fetch();
$fcount = $t_row['sms_count'];

$totalcount = $fcount + 1;


$up= $db->prepare("UPDATE welfare_reports set sms_count=:sms_count where id=:id");
$up->execute(array(':sms_count' =>$totalcount, ':id' =>$userid));


$statement = $db->prepare('INSERT INTO messages
(fullname,msg,timing,status,userid,title)
                          values
(:fullname,:msg,:timing,:status,:userid,:title)');
$statement->execute(array( 
':fullname' => $admin_name,
':msg' => $sms_msg,
':timing' => $timer1,
':status' => 'sms',
':userid' => $userid,
':title' => $sms_title
));


echo "<div style='color:white;background:green;padding:10px;'>SMS Sent Successfully. SMS status: $status</div>";
}else{
echo "<div style='color:white;background:red;padding:10px;'>SMS Sending Failed. Ensure there is Internet Connection</div>";

}



}
else{
echo "<div id='' style='background:red;color:white;padding:10px;border:none;'>
Direct Page Access not Allowed<br></div>";
}


?>


