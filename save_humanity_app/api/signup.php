<?php
error_reporting(0);

// start users registrations.


if (isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST") {

$email = strip_tags($_POST['username']);
$password = strip_tags($_POST['password']);
$fullname = strip_tags($_POST['fullname']);
$status = 'Admin';


//hash password before sending it to database...
$options = array("cost"=>4);
$hashpass = password_hash($password,PASSWORD_BCRYPT,$options);
$ipaddress = strip_tags($_SERVER['REMOTE_ADDR']);

if ($email == ''){
echo "<div style='background:red;padding:8px;color:white;border:none;'>Email is empty</div>";
exit();
}
$em= filter_var($email, FILTER_VALIDATE_EMAIL);
if (!$em){
echo "<div style='background:red;padding:8px;color:white;border:none;'>Email Address is Invalid</div>";
exit();
}

$ip= filter_var($ipaddress, FILTER_VALIDATE_IP);
if (!$ip){
echo "<div style='background:red;padding:8px;color:white;border:none;'>IP Address is Invalid</div>";
exit();
}


//insert into database

$timer = time();
include("time/now.fn");
$created_time=strip_tags($now);
$dt2=date("Y-m-d H:i:s");


$token1= md5(uniqid());
$token2 = time();
$token = $token1.$token2;

include('data6rst.php');


// check if user with this username already exits
//$result_verified = $db->prepare('select * from users where username=:username');
//$result_verified->execute(array(':username' =>$username));

$result_verified = $db->prepare('select * from users');
$result_verified->execute(array());
 $rows= $result_verified->fetch();
$norows= $result_verified->rowCount();

//if($norows== 1){

if($norows ==1){
echo "<div style='background:red;padding:8px;color:white;border:none;'>Only 1 Admin Account is Allowed to be Created. Please Login as Admin</div>";
exit();
}




$statement = $db->prepare('INSERT INTO users

(email,fullname,password,timing,status)
 
                          values
(:email,:fullname,:password,:timing,:status)');

$statement->execute(array( 

':email' => $email,
':fullname' => $fullname,
':password' => $hashpass,		
':timing' => $timer,
':status' =>$status

));


if($statement){
echo  "<script>alert('Account Successfully Created. You can Login Now');</script>";
echo "<div style='background:green;padding:8px;color:white;border:none;'>Account Successfully Created. You can Login Now...</div>";
echo "<script>
$('#myModal_signup').modal('hide');
$('#myModal_login').modal('show');
</script>
";

}

              else {
echo "<div style='background:red;padding:8px;color:white;border:none;'>Account Creation Failed. Ensure there is internet connections...</div>";
                }

}


else{

echo "<div style='background:red;padding:8px;color:white;border:none;'>Direct Page Access not allowed...</div>";
}


?>



