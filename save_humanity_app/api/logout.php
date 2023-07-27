<?php

error_reporting(0);
include('settings.php');


if($sessions_validate ==1){

// Destroy Session Cookies

//Set Expiration Cookies to 1 hour ago
setcookie("user_session", "", time()-3600);
setcookie("session_fullname", "", time()-3600);
setcookie("session_status", "", time()-3600);
setcookie("session_token1", "", time()-3600);
setcookie("session_token2", "", time()-3600);

unset($_COOKIE['user_session']);
setcookie("user_session","",time()-1);

header("Location:index.php");  

}




if($sessions_validate ==2){

//Destroy php Sessions
session_start();
unset($_SESSION['user_session']);
unset($_SESSION['fullname']);
unset($_SESSION['user_status']);
unset($_SESSION['token1']);
unset($_SESSION['token2']);

session_destroy();
header("Location:index.php");
}






?>