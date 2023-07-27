<?php
error_reporting(0);
ini_set('max_execution_time', 300); //300 seconds = 5 minutes
// temporarly extend time limit
set_time_limit(300);
if (isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST") {

include('settings.php');
include('data6rst.php');



$case_no = strip_tags($_POST['case_no']);
$email = strip_tags($_POST['email']);
$fullname = strip_tags($_POST['fullname']);
$phoneno = strip_tags($_POST['phoneno']);
$comments = strip_tags($_POST['comments']);
$report_type = strip_tags($_POST['report_type']);
$address = strip_tags($_POST['address']);





$mt_id=rand(0000,9999);
$dt2=date("Y-m-d H:i:s");
$ipaddress = strip_tags($_SERVER['REMOTE_ADDR']);



// honey pot spambots
$emailaddress_pot =$_POST['emailaddress_pot'];
if($emailaddress_pot !=''){
//spamboot detected.
//Redirect the user to google site

echo "<script>
window.setTimeout(function() {
    window.location.href = 'https://google.com';
}, 1000);
</script><br><br>";

exit();
}



if ($email == ''){
echo "<div class='alert alert-danger' id='alerts_reg'><font color=red>Email Address is empty</font></div>";
exit();
}

$em= filter_var($email, FILTER_VALIDATE_EMAIL);
if (!$em){
echo "<div class='alert alert-danger' id='alerts_reg'><font color=red>Email Address is Invalid</font></div>";
exit();
}

$ip= filter_var($ipaddress, FILTER_VALIDATE_IP);
if (!$ip){
echo "<div class='alert alert-danger' id='alerts_reg'><font color=red>IP Address is Invalid</font></div>";
exit();
}



if($google_map_keys ==''){
echo "<div style='color:white;background:red;padding:6px;'>Google Javascript Map API Key is Empty</div>";
exit();
}



$address_g = urlencode($address);
// geocode geo location address to longitudes and latitudes

$call_url ="https://maps.googleapis.com/maps/api/geocode/json?key=$google_map_keys&address=$address_g&sensor=false";
 $res = file_get_contents($call_url);
 $json = json_decode($res, true);
//print_r($res);

        if($json['status']='OK'){

         $lat = $json['results'][0]['geometry']['location']['lat'];
         $lng = $json['results'][0]['geometry']['location']['lng'];
         $formatted_address = $json['results'][0]['formatted_address'];

}else{
echo "<div class='alert alert-danger' id='alerts_reg'><font color=red>Address Could not be Formatted via Google Map Reverse Geo-Codings</font></div>";
//exit();
}

        $lat = $json['results'][0]['geometry']['location']['lat'];
        $lng = $json['results'][0]['geometry']['location']['lng'];



		 

$timer1= time();



$statement = $db->prepare('INSERT INTO welfare_reports
(case_no,email,fullname,address,report_type,status,comments,timing,lat,lng,sms_count,email_count,phone_no)
                          values
(:case_no,:email,:fullname,:address,:report_type,:status,:comments,:timing,:lat,:lng,:sms_count,:email_count,:phone_no)');

$statement->execute(array( 
':case_no' => $case_no,
':email' => $email,
':fullname' => $fullname,
':address' => $address,
':report_type' => $report_type,
':status' => 'Open',
':comments' => $comments,
':timing' => $timer1,
':lat' => $lat,
':lng' => $lng,
':sms_count' =>'0',
':email_count' =>'0',
':phone_no' =>$phoneno
));


$res = $db->query("SELECT LAST_INSERT_ID()");
$lastId_post = $res->fetchColumn();


if($statement){


//echo "<script>alert('Submission Successful');</script>";
echo "<div id='alertdata' style='background:green;color:white;padding:10px;border:none;'>Report Submission Successful.Sms Sent..</div>";


echo "<script>



$(document).ready(function(){

var post_id  = '$lastId_post';
var report_type  = '$report_type';
var fullname  = '$fullname';

 if(post_id==''){
alert('Report Id Failed.Please Try Again');
}


else{


$('#loader-sms').fadeIn(400).html('<br><div style=color:black;background:#ddd;padding:10px;><img src=$site_url2/img/loader.gif>&nbsp;Step 2: Please Wait, Sending SMS Message to Admin...</div><br>');
var datasend = {post_id:post_id, report_type:report_type, fullname:fullname};


	
		$.ajax({
			
			type:'POST',
			url:'report_sms.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){

$('#loader-sms').hide();
$('#result-sms').html(msg);
//setTimeout(function(){ $('#result-sms').html(''); }, 5000);


	
}
			
		});
		
		}

});
</script>
<div id='loader-sms'></div>
<div id='result-sms'></div>
<br>






<script>
$(document).ready(function(){

var post_id  = '$lastId_post';
var report_type  = '$report_type';
var fullname  = '$fullname';

 if(post_id==''){
alert('Report Id Failed.Please Try Again');
}


else{


$('#loader-email').fadeIn(400).html('<br><div style=color:black;background:#ddd;padding:10px;><img src=$site_url2/img/loader.gif>&nbsp;Step 3: Please Wait, Sending Email Message to Admin...</div><br>');
var datasend = {post_id:post_id, report_type:report_type, fullname:fullname};


	
		$.ajax({
			
			type:'POST',
			url:'report_email.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){

$('#loader-email').hide();
$('#result-email').html(msg);
//setTimeout(function(){ $('#result-email').html(''); }, 5000);


	
}
			
		});
		
		}

});
</script>
<div id='loader-email'></div>
<div id='result-email'></div>
<br>





";




}
else {
echo "<div id='alertdata' class='alerts alert-danger'>Submission Failed. Please Try Again...<br></div>";
}


}
else{
echo "<div id='alertdata_uploadfiles' style='background:red;color:white;padding:10px;border:none;'>
Direct Page Access not Allowed<br></div>";
}





?>



