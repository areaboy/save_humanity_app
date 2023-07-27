<?php
error_reporting(0);


if (isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST") {

$email = strip_tags($_POST['username']);
$password = strip_tags($_POST['password']);


if ($email == ''){
echo "<div style='background:red;padding:8px;color:white;border:none;'>Email is Empty.</div>";
exit();
}


if ($password == ''){
echo "<div style='background:red;padding:8px;color:white;border:none;'>Password is Empty..</div>";
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



// initialize session if things where ok

session_start();
session_regenerate_id();
$timer = time();




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



$_SESSION['user_session'] = $timer.$mdx2;
//$_SESSION['userid'] = $row['userid'];
$_SESSION['fullname'] = $row['fullname'];
$_SESSION['user_status'] = $row['status'];
$_SESSION['token1'] = $row['token1'];
$_SESSION['token2'] = $row['token2'];

// update database with Token
$update= $db->prepare('UPDATE users set token1 =:token1, token2 =:token2 where email=:email');
$update->execute(array(':token1' => $token1, ':token2' => $token2, ':email' =>$email));




echo "<div style='background:green;padding:8px;color:white;border:none;'>Login sucessful <img src='ajax-loader.gif'></div>";
echo "<script>window.location='dashboard.php'</script>";




}
else{

echo "<div style='background:red;padding:8px;color:white;border:none;'>Password does not match..</div>";

}



}
else {

echo "<div style='background:red;padding:8px;color:white;border:none;'>User with this Email/Username does not Exist</div>";
}



}else{
echo "<div style='background:red;padding:8px;color:white;border:none;'>Direct Page Access Not Allowed...</div>";
}




?>

<?php ob_end_flush(); ?>
