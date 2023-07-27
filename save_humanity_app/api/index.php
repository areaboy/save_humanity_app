<?php
error_reporting(0);
include('settings.php');


if($sessions_validate ==1){

$login_page= 'login1.php';
$data_type ='json';
}


if($sessions_validate ==2){

$login_page= 'login2.php';
$data_type='html';
}



?>



<!DOCTYPE html>
<html lang="en">





<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script src="<?php echo $site_url; ?>javascript/jquery.min.js"></script>
<script src="<?php echo $site_url; ?>javascript/moment.js"></script>
	<script src="<?php echo $site_url; ?>javascript/livestamp.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



  <link rel="stylesheet" href="<?php echo $site_url; ?>javascript/bootstrap.min.css" />
  <script src="<?php echo $site_url; ?>javascript/jquery.dataTables.min.js"></script>
  <script src="<?php echo $site_url; ?>javascript/dataTables.bootstrap.min.js"></script>  
  <link rel="stylesheet" href="<?php echo $site_url; ?>javascript/dataTables.bootstrap.min.css" />
  <script src="<?php echo $site_url; ?>javascript/bootstrap.min.js"></script>




    <title>Save Humanity Applications</title>

</head>

<style>

.imagelogo_li_remove {
list-style-type: none;
margin: 0;
 padding: 0;
}

.imagelogo_data{
 width:120px;
 height:80px;
}
  .navbar {
    letter-spacing: 1px;
    font-size: 14px;
    border-radius: 0;
    margin-bottom: 0;
   background-color:purple;

    z-index: 9999;
    border: 0;
    font-family: comic sans ms;
//color:white;
  }


.navbar-toggle {
background-color:orange;
  }

.navgate {
padding:16px;color:white;

}

.navgate:hover{
 color: black;
 background-color: orange;

}


.navbar-header{
height:60px;
}

.navbar-header-collapse-color {
background:white;
}

.dropdown_bgcolor{

background: purple;
color:white;
}

.dropdown_dashedline{
 border-bottom: 2px dotted white;
}

.navgate101:hover{
background:purple;
color:white;

}


.creator_imagelogo_data{
 width:60px;
 height:60px;
}

/* make modal appear at center of the page */
.modal-appear-center {
margin-top: 25%;
//width:40%;
}


/* make modal appear at center of the page */
.modal-appear-center1 {
margin-top: 15%;
//width:40%;
}
.modal-appear-center2 {
margin-top: 10%;
//width:40%;
}



.modal_head_color{
background-color: purle;
padding: 6px;
color:white;
}


.modal_footer_color{
background-color: purple;
padding: 6px;
color:white;
}


/* footer */


  .navbar_footer {
letter-spacing: 1px;
    font-size: 14px;
    border-radius: 0;
    margin-bottom: 0;
    //background-color:purple;
    color:white;
    padding:20px;
    border: 0;
    font-family: comic sans ms;
  }


.footer_bgcolor{
background: purple;
}

.footer_text1{
color:white;
font-size:20px;
border:none;
cursor:pointer;
}

.footer_text2{
color:grey;
font-size:14px;
border:none;
cursor:pointer;
}

.footer_text1:hover{
color:grey;
}


.footer_text2:hover{
color:orange;
}


.footer_dashedline{
 border-top: 1px dashed white;
}



.category_post1{
background-color: purple;
padding: 6px;
color:white;
font-size:14px;
border-radius: 15%;
border: none;
cursor: pointer;
text-align: center;
z-index: -999;
}
.category_post1:hover {
background: black;
color:white;
}


</style>


<body>




    


    <div>




<!-- start column nav-->


<div class="text-center">
<nav class="navbar navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navgator">
        <span class="navbar-header-collapse-color icon-bar"></span>
        <span class="navbar-header-collapse-color icon-bar"></span>
        <span class="navbar-header-collapse-color icon-bar"></span> 
        <span class="navbar-header-collapse-color icon-bar"></span>                       
      </button>
     
<li class="navbar-brand home_click imagelogo_li_remove" ><img title='logo' alt='logo' class="img-rounded imagelogo_data" src="<?php echo $site_url; ?>img/logo.png"></li>
    </div>
    <div class="collapse navbar-collapse" id="navgator">


      <ul class="nav navbar-nav navbar-right">

      <li><a <a style='cursor:pointer;color:white;font-size:14px;' class="nav-link" data-toggle="modal" data-target="#myModal_about" title="About"><button class="category_post1">About</button></a></li>
      <li><a style='cursor:pointer;color:white;font-size:14px;' class="nav-link" data-toggle="modal" data-target="#myModal_contact" title="Contact-Us"><button class="category_post1">ContactUs</button></a></li>
      <li><a style='cursor:pointer;color:white;font-size:14px;' class="nav-link" data-toggle="modal" data-target="#myModal_signup" title=" Signup"><button class="category_post1">Admin Signup</button></a></li>
<li class="nav-item">

                            <a style='cursor:pointer;color:white;font-size:14px;' class="nav-link" data-toggle="modal" data-target="#myModal_login" title="Login"><button class="category_post1">Admin Login</button></a>
                        </li>
      </ul>




    </div>
  </div>



</nav>


    </div><br /><br />

<!-- end column n-->






<br><br>

<h2><center>Save Humanity :An Interactive Web Applications that Connects People who needs help with various Emergency Agencies, Charity & NGO Organisations. </center></h2>
<center>

<br><b style='font-size:20px;'>Powered By TiDB Cloud Database, Google Map, Google Chart Statictics, Email and SMS Messages Campaign</b><br>
</center>





<style>
    
  .needyx_css{
      background:navy;
      color:white;
      padding:20px;
      border:none;
      border-radius:20%;
      cursor:pointer;
      width:80%;
  }  
 
.needyx_css:hover{
 color: black;
 background-color: orange;
cursor:pointer;
 //width:45%;
}  

.needy_css{
      background:fuchsia;
      color:white;
      padding:20px;
      border:none;
      border-radius:20%;
      cursor:pointer;
      width:80%;
  }  
 
.needy_css:hover{
    cursor:pointer;
 color: black;
 background-color: orange;

 //width:50%;
}  
</style><br><br>
        <div class="container">
            <div class="row">


<div class="col-sm-6  well alerts alert-warning">
               
<br><br>
<h3>Save Humanity</h3><br>
 Seeking for Help. Click button below to apply for help....<br>

<button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModal">Apply For Help</button>



                </div>


                <div class="col-sm-6">
               

<img class='img-thumbnail border-0' style='width:450px;height:300px; 
max-width:450px;max-height:300px;' src='<?php echo $site_url; ?>img/base2.png' title='Image'><br><br>


                </div>



              
            </div>
        </div>




        <div class="container">
            <div class="row justify-content-center text-center border-top py-2">
                <span>&copy;2023.Save Humanity By Tidb Cloud Database.</span>
            </div>
        </div>
    </div>





















<script>


// signup starts

$(document).ready(function(){
$('#signup_btn').click(function () {

var username  = $('#username_s').val();
var password = $('#password_s').val();
var confirm_password = $('#password_sx').val();
var fullname = $('#fullname_s').val();

//alert(status);

 if(fullname==""){
alert('please Enter Fullname');
}


 else if(username==""){
alert('please Enter Email');
}

else if(password==""){
alert('please Enter Password');
}

else if(confirm_password==""){
alert('please Enter Password');
}



else if(confirm_password != password){
alert('Confirm Password and Password Does not Match');
}


else{


$("#loader-signup").fadeIn(400).html('<br><div style="color:white;background:#800000;padding:10px;"><img src="<?php echo $site_url; ?>img/loader.gif">&nbsp;Please Wait, Your data is being Created...</div>');
var datasend = {username:username, password:password, fullname:fullname};


	
		$.ajax({
			
			type:'POST',
			url:'signup.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){

$("#loader-signup").hide();
$("#result-signup").html(msg);
setTimeout(function(){ $("#result-signup").html(''); }, 5000);


// clear all Data
//$('#username_s').val('');		
//$('#password_s').val('');	


	
}
			
		});
		
		}

});

});

// signup ends


//login starts

$(document).ready(function(){
$('#login_btn').click(function () {

var username  = $('#username').val();
var password = $('#password').val();





 if(username==""){
alert('please Enter Email');
}

else if(password==""){
alert('please Enter Password');
}




else{


$("#loader-login").fadeIn(400).html('<br><div style="color:white;background:#800000;padding:10px;"><img src="<?php echo $site_url; ?>img/loader.gif">&nbsp;Please Wait, Your are being login as Admin...</div>');
var datasend = {username:username, password:password};


<?php
if($data_type =='html'){
?>
	
		$.ajax({
			
			type:'POST',
			url:'<?php echo $login_page; ?>',
			data:datasend,
                        dataType: '<?php echo $data_type; ?>',
                        crossDomain: true,
			cache:false,
			success:function(msg){

$("#loader-login").hide();
$("#result-login").html(msg);
setTimeout(function(){ $("#result-login").html(''); }, 5000);
// clear all Data
//$('#username').val('');		
//$('#password').val('');		
}
});

<?php
}
?>

<?php
if($data_type =='json'){
?>
	
		$.ajax({
			
			type:'POST',
			url:'<?php echo $login_page; ?>',
			data:datasend,
                        dataType: '<?php echo $data_type; ?>',
                        crossDomain: true,
			cache:false,
			success:function(msg){



if(msg.status == 0){
var messagex = msg.message;
alert(messagex);

$("#loader-login").hide();
$('#result_login').html("<div style='color:white;background:red;padding:8px;border:none;'>" +messagex+ "</div>");
setTimeout(function(){ $('#result_login').html(''); }, 5000);
}





if(msg.status == 1){

var messagex = msg.message;
alert(messagex);


$('#result_login').html("<div style='color:white;background:green;padding:8px;border:none;'>" +messagex+ "</div>");
setTimeout(function(){ $('#result_login').html(''); }, 5000);

// clear all Data
//$('#username').val('');		
//$('#password').val('');


// initialize sessions cookies;


document.cookie = "session_fullname = " + msg.fullname;
document.cookie = "session_status = " + msg.user_status;
document.cookie = "session_token1 = " + msg.token1;
document.cookie = "session_token2 = " + msg.token2;
document.cookie = "user_session = " + msg.user_session;



window.location='dashboard.php';
/*
window.setTimeout(function() {
    window.location.href = 'dashboard.php';
}, 1000);
*/

}

		
}
});

<?php
}
?>





		
		}

});

});

//  login ends
</script>






 <script>



            $(function () {
                $('#save_btn').click(function () {
                 
                   
                    var country = '';
                    var emailaddress_pot = $('#emailaddress_pot').val();
                    var email = $('#emailv').val();
                    //preparing Email for validations
                    var atemail = email.indexOf("@");
                    var dotemail = email.lastIndexOf(".");


var case_no = $('#case_no').val();
var phoneno = $('#phonenov').val();
var fullname = $('#fullnamep').val();
var address = $('#address').val();
var report_type = $("input[name='reports']:checked").val();
var comments = $('#comments').val();

if(case_no==""){
alert('please Case No Cannot be empty.');
}


else if(report_type==""){
alert('Please Pick a Report');
}


else if(fullname==""){
alert('Enter fullname');
}

else if(email==""){
alert('please Enter Email Address');
}

else  if (atemail < 1 || ( dotemail - atemail < 2 )){
alert("Please enter valid email Address")
}

else if(phoneno==""){
alert('Please Enter Phoneno');
}


else if(address==""){
alert('Enter Address');
}

else if(comments==""){
alert('Comments Cannot be empty');
}

else{


          var form_data = new FormData();
          form_data.append('email', email);

          form_data.append('emailaddress_pot', emailaddress_pot);
form_data.append('case_no', case_no);
form_data.append('phoneno', phoneno);
form_data.append('fullname', fullname);
form_data.append('comments', comments);
form_data.append('report_type', report_type);
form_data.append('address', address);

                    $('.upload_progress').css('width', '0');
                    $('#btn').attr('disabled', 'disabled');
                    $('#loader').fadeIn(400).html('<br><span class="well" style="color:black"><img src="<?php echo $site_url; ?>img/ajax-loader.gif">&nbsp;Please Wait, Your Data is being Submitted</span>');
                    $.ajax({
                        url: 'reports.php',
                        data: form_data,
                        processData: false,
                        contentType: false,
                        ache: false,
                        type: 'POST',
                     
                        success: function (msg) {
                                $('#box').val('');
				$('#loader').hide();
				$('.result_data').fadeIn('slow').prepend(msg);
				//setTimeout(function(){ $('.result_data').html(''); }, 5000);


//strip all html elemnts using jquery
var html_stripped = jQuery(msg).text();
//alert(html_stripped);

//check occurrence of word (Successful) from backend output already html stripped.
var Frombackend = html_stripped;
var bcount = (Frombackend.match(/Successful/g) || []).length;
//alert(bcount);

if(bcount > 0){
/*
$('#emailv').val('');
$('#phonenov').val('');
$('#fullnamep').val('');
$('#address').val('');
$('#comments').val('');
//$('#reports').val('');
*/

}




                        }
                    });
} // end if validate
                });
            });




        </script>
    </head>
    <body>

 

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog  modal-appear-center2">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header"  style='background:purple;color:white;padding:6px;'>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Request Form</h4>
      </div>
      <div class="modal-body">
        <p>Request for Help</p>



<!--start form-->
<form id="" method="post">



<style>
.report_css{
background:#ddd;
padding:10px;
height:40px;
border:none;
color:black;
border-radius:20%;


}


.report_css:hover{
background:purple;
color:white;

}

</style>


<h3>Pick Report Type</h3>
<div class='row'>

<div class='col-sm-4 report_css'>
<input type="radio" name="reports" value="Fire-OutBreak"/>Fire-OutBreak
</div>

<div class='col-sm-4 report_css'>
<input type="radio" name="reports" value="Medical-Help"/>Medical-Help
</div>
<div class='col-sm-4 report_css'>
<input type="radio" name="reports" value="Refugees"/>Refugees
</div>
</div>




<div class='row'>
<div class='col-sm-4 report_css'>
<input type="radio" name="reports" value="Accidents"/>Accidents
</div>

<div class='col-sm-4 report_css'>
<input type="radio" name="reports" value="Sexual Harrasments"/>Sexual Harrasment
</div>

<div class='col-sm-4 report_css'>
<input type="radio" name="reports" value="Kidnapping"/>Kidnapping
</div>

</div>


<div class='row'>

<div class='col-sm-4 report_css'>
<input type="radio" name="reports" value="Police Brutality"/>Police Brutality
</div>


<div class='col-sm-4 report_css'>
<input type="radio" name="reports" value="Racism"/>Racism
</div>
<div class='col-sm-4 report_css'>
<input type="radio" name="reports" value="Domestic Violence"/>Domestic Violence
</div>

</div>



<div class='row'>

<div class='col-sm-4 report_css'>
<input type="radio" name="reports" value="Road Issues"/>Road Issues
</div>


<div class='col-sm-4 report_css'>
<input type="radio" name="reports" value="Natural Disaster"/>Natural Disaster
</div>
<div class='col-sm-4 report_css'>
<input type="radio" name="reports" value="Others"/>Others
</div>

</div>


<div class="well">







<div class="form-group">
              <label style="" for="">
 Case No</label>
              <input type="text" class="col-sm-12 form-control" id="case_no" name="case_no" value="<?php 

$mt_id=rand(0000,9999);
 $time= time();
echo $time.$mt_id; ?>">
            </div>










<div class='row'>
<div class="form-group col-sm-6">
              <label style="" for="">
 Fullname</label>
              <input type="text" class="col-sm-12 form-control" id="fullnamep" name="fullnamep" placeholder="Enter fullname" value=''>
            </div>

<div class="form-group col-sm-6">
              <label style="" for="">
 Email</label>
              <input type="text" class="col-sm-12 form-control" id="emailv" name="emailv" placeholder="Enter Email" value='esedo1@gmail.com'>
            </div>




</div>



<div class='row'>

<div class="form-group col-sm-12">
              <label style="" for="">
 Phone No (Eg:  +2349135775247 )  Add plus sign</label>
              <input type="text" class="col-sm-12 form-control" id="phonenov" name="phonenov" placeholder="Enter Phone No."  value='+2349135775247'>
            </div>


</div>





<div class=" alerts alert-info">

<div class='row'>

<div class="form-group col-sm-12">
              <label style="" for="">
 Full Location Address Eg. ( Broadway 10012, New York, USA ) </label>
              <input type="text" class="col-sm-12 form-control" id="address" name="address" value="Broadway 10012, New York, USA">
            </div>
</div>



<div class='row'>
<div class="form-group col-sm-12">
              <label style="" for="">
Comments</label>
              <textarea class="col-sm-12 form-control" id="comments" name="comments" placeholder="Comments"></textarea>
            </div>




</div>



</div>




<style>
.secured_pot{ display:none; } /* hide because is spam protection */
</style>
<input class="secured_pot" type="text" name="emailaddress_pot" id="emailaddress_pot" />


                    <div class="form-group">
                          
                        <div id="loader"></div>
                        <div class="result_data"></div>
                    </div>

                    <input type="button" id="save_btn" class="pull-right btn btn-primary" value="Submit" />
                </form>

<!--end form-->

</div>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>



<!-- Admin login Modal start -->



<div id="myModal_signup" class="modal fade" role="dialog">
  <div class="modal-dialog  modal-appear-center2">

    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header"  style='background:purple;color:white;padding:6px;'>
        <h4 class="modal-title">Admin Signup System</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
 
Admin Signup System....<br><br>
 <div class="form-group">
              <label> Fullname: </label>
              <input type="text" class="col-sm-12 form-control" id="fullname_s" name="fullname_s"  value="Admin Save Humanities">
            </div>


 


 <div class="form-group">
              <label>Email: </label>
              <input type="text" class="col-sm-12 form-control" id="username_s" name="username_s"  value="save_humanity@gmail.com">
            </div>
 
 <div class="form-group">
              <label>Password: </label>
              <input type="password" class="col-sm-12 form-control" id="password_s" name="password_s"  value="123">
            </div>

 <div class="form-group">
              <label>Confirm - Password: </label>
              <input type="password" class="col-sm-12 form-control" id="password_sx" name="password_sx"  value="123">
            </div>





<br>
<div id="loader-signup"></div>
<div id="result-signup"></div>


                    <input type="button" id="signup_btn" class="btn btn-primary" value="Signup Now!" />



      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<!-- signup Modal ends -->


<!--  login Modal start -->
<div class="modal fade" id="myModal_login">
  <div class="modal-dialog  modal-appear-center2">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header"  style='background:purple;color:white;padding:6px;'>
        <h4 class="modal-title">Login System</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
 
Admin Login System.....<br><br>

 <div class="form-group">
              <label>Email: </label>
              <input type="text" class="col-sm-12 form-control" id="username" name="username"  value="save_humanity@gmail.com">
            </div>
 
 <div class="form-group">
              <label>Password: ( 123 )</label>
              <input type="password" class="col-sm-12 form-control" id="password" name="password"  value="123">
            </div>

<br>
<div id="loader-login"></div>
<div id="result-login"></div>


                    <input type="button" id="login_btn" class="btn btn-primary" value="Login Now!" />



      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<!--  login Modal ends -->














<!-- Contact Modal start -->
<div class="modal fade" id="myModal_contact">
  <div class="modal-dialog  modal-appear-center2">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header"  style='background:purple;color:white;padding:6px;'>
        <h4 class="modal-title">Contact Us</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
 
Sites Contacts Informations Goes here<br><br>





      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
   <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

    </div>
  </div>
</div>

<!-- contact Modal ends -->








<!-- about Modal start -->
<div class="modal fade" id="myModal_about">
  <div class="modal-dialog modal-appear-center2">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header" style='background:purple;color:white;padding:6px;'>
        <h4 class="modal-title">About Us</h4>
        <button type="button" class="btn-close pull-right" data-dismiss="modal">Close</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
 
About Us Informations Goes here<br><br>





      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<!-- about Modal ends -->









