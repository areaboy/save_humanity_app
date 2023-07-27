

<?php
	
$user_session=  htmlentities(htmlentities($_COOKIE['user_session'], ENT_QUOTES, "UTF-8"));

//checkif cookies is set
if (!isset($_COOKIE['user_session'])  || (trim($_COOKIE['user_session']) == '') ) {

echo "<script>alert('Session Expired. Direct access to this Page Not allowed..');
window.location='index.php';
</script>";

//header("location: index.php");
exit();

}



//checkif cookies is set
if (isset($_COOKIE['user_session']) ) {

// Cookies set

$session_fullname  = htmlentities(htmlentities($_COOKIE['session_fullname'], ENT_QUOTES, "UTF-8"));
$session_status  = htmlentities(htmlentities($_COOKIE['session_status'], ENT_QUOTES, "UTF-8")); 
$session_token1  = htmlentities(htmlentities($_COOKIE['session_token1'], ENT_QUOTES, "UTF-8"));
$session_token2  = htmlentities(htmlentities($_COOKIE['session_token2'], ENT_QUOTES, "UTF-8"));

}










?>