<?php
error_reporting(0);


if (isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST") {

$email = strip_tags($_POST['username']);
$password = strip_tags($_POST['password']);


if ($email == ''){

$response = ['status' => 0, 'message' => "Email is Empty"];
echo json_encode($response);
exit();
}


if ($password == ''){
$response = ['status' => 0, 'message' => "Password is Empty"];
echo json_encode($response);
exit();
}


include('data6rst.php');
$result = $db->prepare('SELECT * FROM users where email = :email');

		$result->execute(array(
			':email' => $email

    ));

$count = $result->rowCount();

$row = $result->fetch();

if( $count == 1 ) {




$password = strip_tags($_POST['password']);
if (password_verify($password, $row["password"])) {

//start hashed passwordless Security verify
//if(password_verify($password, $row["password"])){
            //echo "Password verified and ok";



$userid = $row['id'];
$fullname = $row['fullname'];



$timer = time();
include("time/now.fn");
$created_time=strip_tags($now);
$dt2=date("Y-m-d H:i:s");
$mt = microtime(true);
$mdx = md5($mt);
$mdx2 = md5($ipaddress);
$mdx3 = $mdx.$mdx2;
$uidx = uniqid();
$userid = $uidx.$timer.$mdx;

$uniq = sha1($uidx);

$token1 = $userid.$mdx3;
$token2 = $mt_id2.$uniq;



$user_session = $timer.$mdx2;
$user_status = $row['status'];

// update database with Token
$update= $db->prepare('UPDATE users set token1 =:token1, token2 =:token2 where email=:email');
$update->execute(array(':token1' => $token1, ':token2' => $token2, ':email' =>$email));

//setcookie('user_session', $user_session, time() + (86400 * 30),  "/"); // 86400 = 1 day



$response = ['status' => 1, 'message' => "Login Successful", 'user_status' => "$user_status", 'user_session' => "$user_session", 'token1' => "$token1", 'token2' => "$token2", 'fullname' => "$fullname"];
echo json_encode($response);


}
else{

$response = ['status' => 0, 'message' => "Password Does Not Matched"];
echo json_encode($response);
}



}
else {

$response = ['status' => 0, 'message' => "Email does not Exist"];
echo json_encode($response);
}



}else{
echo "<div style='background:red;padding:8px;color:white;border:none;'>Direct Page Access Not Allowed...</div>";
}




?>

<?php ob_end_flush(); ?>
