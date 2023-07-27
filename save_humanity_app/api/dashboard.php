<?php
error_reporting(0);
include('settings.php');
$timerx = time();




if($sessions_validate ==1){
// Integrate Session Cookies
include('authenticate_session_c.php'); 
}




if($sessions_validate ==2){

//Integrate php Sessions
include('authenticate_session.php'); 
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



    <title>Welcome  <?php echo $session_fullname; ?></title>

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
.modal-appear-center1x {
margin-top: 15%;
//width:40%;
}


/* make modal appear at center of the page */
.modal-appear-center1 {
margin-top: 10%;
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





</head>

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







 <li class="navgate_no">
<a title='Settings' data-toggle="modal" data-target="#myModal_settings" style="color:white;font-size:14px;">
<button class="category_post1">Settings</button></a></li>



 <li class="navgate_no">
<a title='Reports Statistics' href="statistics.php" style="color:white;font-size:14px;">
<button class="category_post1">Report Statistics</button></a></li>

       <li class="navgate_no">
<a title='Logout' href="logout.php" style="color:white;font-size:14px;">
<button class="category_post1">Logout</button></a></li>       



      </ul>




    </div>
  </div>



</nav>


    </div><br /><br />

<!-- end column nav-->









<br><br><br>


<h3>Welcome  <b><?php echo $session_fullname; ?></b></h3>

<br>



<style>
.report_cssx{
background:#ddd;
padding:10px;
height:70px;
border:none;
color:black;
border-radius:20%;
font-size:16px;
text-align:center;


}


.report_cssx:hover{
background:orange;
color:black;

}

</style>




<?php
include('data6rst.php');


$result = $db->prepare("SELECT * FROM welfare_reports");
$result->execute(array());
$rows = $result->fetch();
$counting_result = $result->rowCount();




$resultc = $db->prepare("SELECT * FROM welfare_reports where status='Open' ");
$resultc->execute(array());
$rowsc = $resultc->fetch();
$counting_open = $resultc->rowCount();




$resultc = $db->prepare("SELECT * FROM welfare_reports where status='Closed' ");
$resultc->execute(array());
$rowsc = $resultc->fetch();
$counting_closedx = $resultc->rowCount();
?>
<div class='row'>

<div class='col-sm-4 report_cssx'>
<b style='font-size:20px'>
(<?php echo $counting_result; ?>) </b><br>
Total Registered Reports

</div>


<div class='col-sm-4 report_cssx'>
<b style='font-size:20px'>
(<?php echo $counting_open; ?>)  </b><br>
Total Reports Awaiting Resolving



</div>

<div class='col-sm-4 report_cssx'>
<b style='font-size:20px'>
(<?php echo $counting_closedx; ?>) </b><br>
Total Reports Resolved

</div>


</div><br>

<b>Search Cases, Reports by Fullname, Email, PhoneNo, Cases No, Status, Address etc...</b><br><br>


<div class="container">
<div class="row">
<div class="col-sm-12 table-responsive">
<div class="alert_server_response"></div>
<div class="loader_x"></div>
<table id="backup_content" class="table table-bordered table-striped">
<thead><tr>
<th>Fullname</th>
<th>Case No.</th>
<th>Report Title</th>
<th>comments</th>
<th>Address</th>
<th>Phone No.</th>
<th>Status</th>
<th>Time</th>
<th>Actions</th>
</tr></thead>
</table>
</div>
</div>
</div>







<span class="alert_server_response"></span>
<span class="loader_x"></span>



<script>
$(document).ready(function(){
//$('.btn_call').click(function(){
$(document).on( 'click', '.btn_call', function(){ 



var id = $(this).data('id');
var address = $(this).data('address');
var country = $(this).data('country');
var email = $(this).data('email');
var fullname = $(this).data('fullname');

var comments = $(this).data('comments');
var phone_no  = $(this).data('phone_no');
//alert(phone_no);




$('.p_id').html(id);
$('.p_address').html(address);
$('.p_country').html(country);
$('.p_email').html(email);
$('.p_fullname').html(fullname);
$('.p_comments').html(comments);
$('.p_identity_value').val(id).value;
$('.p_email_value').val(email).value;
$('.p_fullname_value').val(fullname).value;
$('.p_phone_no_value').val(phone_no).value;
$('.p_phone_no').html(phone_no);

});

});






// clear Modal div content on modal closef closed
$(document).ready(function(){

$("#myModal_carto").on("hidden.bs.modal", function(){
    //$(".modal-body").html("");
 $('.mydata_empty').empty(); 
$('#q').val(''); 
});



});


</script>




<script>


   $(document).ready(function(){
//$(".reloadData").click(function(){
$(document).on( 'click', '.reloadData', function(){ 

location.reload();

});

});





$(document).ready(function(){

//$('.updates_btn').click(function(){
$(document).on( 'click', '.updates_btn', function(){ 

// confirm start
if(confirm("Are you sure you want to Mark this Report as Resolved... ")){
var id = $(this).data('id');


$(".loader-updates_"+id).fadeIn(400).html('<br><div style="color:black;background:white;padding:10px;"><i class="fa fa-spinner fa-spin" style="font-size:20px"></i>&nbsp;Please Wait, Report Status is being Updated...</div>');
var datasend = {'id': id};
		$.ajax({
			
			type:'POST',
			url:'updates.php',
			data:datasend,
                         dataType: 'json',
                        crossDomain: true,
			cache:false,
			success:function(msg){

var status = msg['status'];
var message = msg['message'];
//alert(status);
//alert(message);

if(message == 2){
alert('Only Admin can Mark Report as Resolved..');
}


	if(message == 1){

//$(".loader-updates_"+id).hide();
//$(".result-updates_"+id).html("<div style='width: 90px;color:white;background:green;padding:10px;'>Updates  Successfully</div>");
//setTimeout(function(){ $(".result-updates_"+id).html(''); }, 5000);
//location.reload();

alert('Updates Successful');
$("#status_"+id).text(status);
$("#status1_"+id).text('Resolved');
$(".statuscolor_"+id).text('green_css');

$(".stx_"+id).html("<div style='width: 90px;font-size:12px;color:white;background:green;padding:6px;border:none;border-radius:15%;text-align:center;'>Resolved</div>");

$("#statushide_"+id).hide();
$("#statushide2_"+id).hide();

$(".loader-updates_"+id).hide();

}



}
			
});
}

// confirm ends

                });


            });









//Delete

$(document).ready(function(){

//$('.delete_btnx').click(function(){
$(document).on( 'click', '.delete_btnx', function(){ 

// confirm start
if(confirm("Are you sure you want to Delete this Report... ")){
var id = $(this).data('id');

$(".loader-delete_"+id).fadeIn(400).html('<br><div style="color:black;background:white;padding:10px;"><i class="fa fa-spinner fa-spin" style="font-size:20px"></i>&nbsp;Please Wait, Reports is being Deleted...</div>');
var datasend = {'id': id};
		$.ajax({
			
			type:'POST',
			url:'delete.php',
			data:datasend,
                         dataType: 'json',
                        crossDomain: true,
			cache:false,
			success:function(msg){

	if(msg == 1){
alert('Reports Successfully Deleted');
$(".loader-delete_"+id).hide();
$(".result-delete_"+id).html("<div style='color:white;background:green;padding:10px;'>Reports Successfully Deleted</div>");
setTimeout(function(){ $(".result-delete_"+id).html(''); }, 5000);
location.reload();

$(".rec_"+id).animate({ backgroundColor: "#fbc7c7" }, "fast").animate({ opacity: "hide" }, "slow");

}


	if(msg == 0){

alert('Reports could not be deleted. Please ensure you are connected to Internet.');
$(".loader-delete_"+id).hide();
$(".result-delete_"+id).html("<div style='color:white;background:green;padding:10px;'>Reports Deletion Failed</div>");
setTimeout(function(){ $(".result-delete_"+id).html(''); }, 5000);

}


}
			
});
}

// confirm ends

                });


            });

</script>




<style>
.full-screen-modal {
    width: 80%;
    height: 80%;
    margin: 0;
    top: 0;
    left: 0;
}



.red_css {
    background:red;
    color: white;
    padding: 6px;
border:none;
border-radius:15%;
text-align:center;
font-size:12px;
}

.green_css {
    background:green;
    color: white;
    padding: 6px;
border:none;
border-radius:15%;
text-align:center;
font-size:12px;
width: 90px;
}

.email_css{
background: navy;
color:white;
padding:6px;
cursor:pointer;
border:none;
font-size:12px;
//border-radius:25%;
//font-size:16px;
}

.email_css:hover{
background: black;
color:white;

}



.email_users_css{
background: fuchsia;
color:white;
padding:6px;
cursor:pointer;
border:none;
font-size:12px;

}

.email_users_css:hover{
background: black;
color:white;

}





.report_css{
//background: purple;
color:purple;
padding:4px;
cursor:pointer;
border:none;
font-size:12px;
//border-radius:25%;
//font-size:16px;
}

.report_css:hover{
background: black;
color:white;

}

</style>






<script>
$(document).ready(function(){

var get_content = 'get_data';
var backup_type = 'g';
if(get_content=="" && backup_type==""){
alert('There is an Issue with Cotent Database Retrieval');
}
else{
$('.loader_x').fadeIn(400).html('<br><div style="background:#eee; width:100%;height:30%;text-align:center"><img src="<?php echo $site_url; ?>img/ajax-loader.gif">&nbsp;Please Wait, Your Data is being Loaded</div>');
		
 var bck = $('#backup_content').DataTable({
  "processing":true,
  "serverSide":true,
  "order":[],
  "ajax":{
   url:"dashboard_action.php",
   type:"POST",
   data:{get_content:get_content, backup_type:backup_type}
  },
  "columnDefs":[
   {
    "orderable":false,
   },
  ],
  "pageLength": 10
 });

if(bck !=''){
$('.loader_x').hide();
}

}

 
});
</script>











 <!-- email Modal -->
  <div class="modal fade" id="myModal_email" role="dialog">
    <div class="modal-dialog  modal-appear-center1">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style='background:purple;color:white;padding:6px;border:none;'>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Contact Reporter Via Email</h4>
        </div>
        <div class="modal-body">



<script>



$(document).ready(function(){
$('#email_users_btn').click(function(){

var email_title = $('#email_title').val();		
var email_message = $('#email_message').val();
var email = $('.p_email_valuex').val();
var fullname = $('.p_fullname_valuex').val();
var userid = $('.p_identity_value').val();

//alert(userid);
/*
if(isNaN(discount)){
return false;
}
*/
if(email_message==""){
alert('Email Message cannot be Empty.');
$('.email_message_alert').html("<div class='alert alert-warning' style='color:red;'>Email Message Cannot be Empty.</div>");


}


else{


$('#loader_recxx').fadeIn(400).html('<br><div style="color:black;background:#ddd;padding:10px;"><img src="<?php echo $site_url; ?>img/loader.gif" style="font-size:20px"> &nbsp;Please Wait, Email is being sent in Progress.</div>');
var datasend = {email_title:email_title, email_message:email_message,email:email,fullname:fullname,userid:userid};


$.ajax({
			
			type:'POST',
			url:'email_users.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){


                        $('#loader_recxx').hide();
				//$('#result_recxx').fadeIn('slow').prepend(msg);
$('#result_recxx').html(msg);
$('#alertdata_recxx').delay(7000).fadeOut('slow');
$('#alertdata_recxx').delay(7000).fadeOut('slow');

email_function();

$('#email_title').val('');
$('#email_message').val('');
			
			}
			
		});
		
		}
		
	})
					
});




</script>






<input type="hidden" class="p_email_value p_email_valuex"  value="">
<input type="hidden" class="p_fullname_value p_fullname_valuex"  value="">


<div class='row'>
<div class='col-sm-12' style='background:#ddd;'>

<h4>Users Info</h4>


<b>Name: </b><span class='p_fullname'></span><br>
<b>Email: </b><span class='p_email'></span><br>


               </div>


</div>


<br>

<h5> Send Email to User</h5><br>



 <div class="form-group">
           <b>Email Title</b>
              <input type='text' class="col-sm-12 form-control email_title" id="email_title" name="email_title" value="">

            </div>



 <div class="form-group">
           <b>Message</b>
              <textarea class="col-sm-12 form-control" id="email_message" name="email_message" ></textarea>

            </div>

<div class='email_message_alert mydata_empty'></div>





<div class="form-group">
<div id="loader_recxx" ></div>

<div id="result_recxx" class='mydata_empty'></div>
<br />

<button type="button" id="email_users_btn" class="btn btn-primary" title='Email User'>Email User</button>
</div>







<script>


/*

$(document).ready(function(){
//$('.btn_call').click(function(){
$(document).on( 'click', '.btn_call', function(){ 
var id = $(this).data('id');


if(id==""){
alert('There is an Issue with User Id.');
}
else{
$('#loader_msg').fadeIn(400).html('<br><div style="color:black;background:#ddd;padding:10px;"><img src="<?php echo $site_url; ?>img/loader.gif" style="font-size:20px"> &nbsp;Please Wait,Loading Message.</div>');
var datasend = {userid:id};


$.ajax({
			
			type:'POST',
			url:'msg_email.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){


                        $('#loader_msg').hide();
				//$('#result_msg').fadeIn('slow').prepend(msg);
$('#result_msg').html(msg);
$('#alertdata_msg').delay(7000).fadeOut('slow');
$('#alertdata_msg').delay(7000).fadeOut('slow');


			
			}
			
		});
		
		}
		
	});
					
});



*/


</script>


<div id="loader_msg"></div>
<div id="result_msg"></div>




     </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>



<!-- The Modal contact/email users Ends -->







<script>



//$(document).ready(function(){
function sms_function(){
//$(document).on( 'click', '.btx_action', function(){ 
var id =  $('.pidx').val();

//alert(id);
if(id==""){
alert('There is an Issue with User Id.');
}
else{
$('#loader_msgs').fadeIn(400).html('<br><div style="color:black;background:#ddd;padding:10px;"><img src="<?php echo $site_url; ?>img/loader.gif" style="font-size:20px"> &nbsp;Please Wait,Loading Message.</div>');
var datasend = {userid:id};


$.ajax({
			
			type:'POST',
			url:'msg_sms.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){


                        $('#loader_msgs').hide();
				//$('#result_msg').fadeIn('slow').prepend(msg);
$('#result_msgs').html(msg);
$('#alertdata_msgs').delay(7000).fadeOut('slow');
$('#alertdata_msgs').delay(7000).fadeOut('slow');


			
			}
			
		});
		
		}
		
	}
					
//});






//$(document).ready(function(){
//$('.btn_action').click(function(){
//$(document).on( 'click', '.btx_action', function(){ 

function email_function(){
var id = $('.pidx').val();


if(id==""){
alert('There is an Issue with User Id.');
}
else{
$('#loader_msg').fadeIn(400).html('<br><div style="color:black;background:#ddd;padding:10px;"><img src="<?php echo $site_url; ?>img/loader.gif" style="font-size:20px"> &nbsp;Please Wait,Loading Message.</div>');
var datasend = {userid:id};


$.ajax({
			
			type:'POST',
			url:'msg_email.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){


                        $('#loader_msg').hide();
				//$('#result_msg').fadeIn('slow').prepend(msg);
$('#result_msg').html(msg);
$('#alertdata_msg').delay(7000).fadeOut('slow');
$('#alertdata_msg').delay(7000).fadeOut('slow');


			
			}
			
		});
		
		}
		
}




</script>




<input type="hidden" class="p_identity_value pidx"  value="">









<!-- The Modal sms users start -->
<div class="modal fade" id="myModal_sms" >
  <div class="modal-dialog modal-lg modal-appear-center1">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header" style='background:purple;color:white;padding:6px;border:none;'>
        <h4 class="modal-title">Contact Reporter Via SMS</h4>
    <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body starts-->
      <div class="modal-body">



<script>



$(document).ready(function(){
$('#sms_users_btn').click(function(){

	
var sms_message = $('#sms_message').val();
var email = $('.p_email_valuex').val();
var fullname = $('.p_fullname_valuex').val();
var userid = $('.p_identity_value').val();
var phone_no = $('.p_phone_no_value').val();

//alert(phone_no);
/*
if(isNaN(discount)){
return false;
}
*/
if(sms_message==""){
alert('SMS Message cannot be Empty.');
$('.sms_message_alert').html("<div class='alert alert-warning' style='color:red;'>SMS Message Cannot be Empty.</div>");


}


else{


$('#loader_s').fadeIn(400).html('<br><div style="color:black;background:#ddd;padding:10px;"><img src="<?php echo $site_url; ?>img/loader.gif" style="font-size:20px"> &nbsp;Please Wait, SMS is being sent in Progress.</div>');
var datasend = {sms_message:sms_message,email:email,fullname:fullname,userid:userid,phone_no:phone_no};


$.ajax({
			
			type:'POST',
			url:'sms_users.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){


                        $('#loader_s').hide();
				//$('#result_s').fadeIn('slow').prepend(msg);
$('#result_s').html(msg);
$('#alertdata_s').delay(7000).fadeOut('slow');
$('#alertdata_s').delay(7000).fadeOut('slow');


sms_function();
$('#sms_message').val('');			
			}
			
		});
		
		}
		
	})
					
});




</script>






<input type="hidden" class="p_email_value p_email_valuex"  value="">
<input type="hidden" class="p_fullname_value p_fullname_valuex"  value="">


<div class='row'>
<div class='col-sm-12' style='background:#ddd;'>

<h4>Users Info</h4>


<b>Name: </b><span class='p_fullname'></span><br>
<b>Email: </b><span class='p_email'></span><br>
<b>Phone No: </b><span class='p_phone_no'></span><br>

               </div>


</div>


<br>

<h5> Send SMS to User</h5><br>
 <div class="form-group">
           <b>Recipient Phone No.</b>
<input disabled type="" class="p_phone_no_value p_phone_no_valuex col-sm-12 form-control"  value="">
</div>

 <div class="form-group">
           <b>Message</b>
              <textarea class="col-sm-12 form-control" id="sms_message" name="sms_message" ></textarea>

            </div>

<div class='sms_message_alert mydata_empty'></div>





<div class="form-group">
<div id="loader_s" ></div>

<div id="result_s" class='mydata_empty'></div>
<br />

<button type="button" id="sms_users_btn" class="btn btn-primary" title='SMS User'>Send SMS Now</button>
</div>







<script>




$(document).ready(function(){
//$('.btn_action').click(function(){
$(document).on( 'click', '.btn_call', function(){ 
var id = $(this).data('id');


if(id==""){
alert('There is an Issue with User Id.');
}
else{
$('#loader_msgs').fadeIn(400).html('<br><div style="color:black;background:#ddd;padding:10px;"><img src="<?php echo $site_url; ?>img/loader.gif" style="font-size:20px"> &nbsp;Please Wait,Loading Message.</div>');
var datasend = {userid:id};


$.ajax({
			
			type:'POST',
			url:'msg_sms.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){


                        $('#loader_msgs').hide();
				//$('#result_msg').fadeIn('slow').prepend(msg);
$('#result_msgs').html(msg);
$('#alertdata_msgs').delay(7000).fadeOut('slow');
$('#alertdata_msgs').delay(7000).fadeOut('slow');


			
			}
			
		});
		
		}
		
	});
					
});






</script>


<div id="loader_msgs"></div>
<div id="result_msgs"></div>




      </div>

      <!-- Modal body ends-->


      <!-- Modal footer -->
      <div class="modal-footer">
   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>



<!-- The Modal sms users Ends -->




<!-- map  modal starts here -->


<div class="container_map">

  <div class="modal fade" id="myModal_map" role="dialog">
    <div class="modal-dialog modal-lg  modal-appear-center1 pull-right1_no modaling_sizing1  full-screen-modal_no">
      <div class="modal-content">
        <div class="modal-header" style="color:black;background:#c1c1c1">
 

      
 <button type="button" class="close btn btn-warning" data-dismiss="modal">Close</button>

      <h4 class="modal-title">Users Map Locations</h4>
        </div>
        <div class="modal-body">



      <h3>Users Maps Locations</h3>

<!-- start map loading-->
<style>
#map {
        height: 80%;
      }
    
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
.res_center_css{
position:absolute;top:50%;left:50%;margin-top: -50px;margin-left -50px;width:100px;height:100px;
}

</style>

<div id="loader" class='res_center_css'></div>

    <div style='width:600px; height:600px;' id="map"></div>

    <script>
      var customLabel = {
        Vaccine: {
          label: 'P'
        }
      };
//center: new google.maps.LatLng(-33.863276, 151.207977),
//zoom: 12
 
/*
 var url_content1 = window.location.href;
var url_p1 = new URL(url_content1);
var identity = url_p1.searchParams.get("identity");
*/



        function initMap() {
//function {
//$('.btn_action_map').click(function(){
$(document).on( 'click', '.btn_call', function(){ 


var postid = $(this).data('id');
var identity = $(this).data('id');
var lngx = $(this).data('lng');
var latx = $(this).data('lat');

//alert(identity);

//center: new google.maps.LatLng(32.944012, -85.953850),

        var map = new google.maps.Map(document.getElementById('map'), {
          center: new google.maps.LatLng(latx, lngx),
          zoom: 11
        });
        var infoWindow = new google.maps.InfoWindow;

$('#loader').fadeIn(400).html('<br><div style="color:black;background:#c1c1c1;padding:10px;"><i class="fa fa-spinner fa-spin" style="font-size:24px"></i>  &nbsp;Please Wait, Google Map is being Loaded...</div>');

          //downloadUrl('map1_backend.php', function(data) {
			  downloadUrl('map.php?identity='+identity, function(data) {
            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName('marker');
            Array.prototype.forEach.call(markers, function(markerElem) {
              var id = markerElem.getAttribute('id');
              var name = markerElem.getAttribute('name');
              var address = markerElem.getAttribute('address');
var timing = markerElem.getAttribute('timing');
var data_type = markerElem.getAttribute('data_type');
var fullname = markerElem.getAttribute('fullname');	
              var type = markerElem.getAttribute('type');
var comments = markerElem.getAttribute('comments');
var case_no = markerElem.getAttribute('case_no');
var photo =markerElem.getAttribute('photo');
var report_type =markerElem.getAttribute('report_type');

var email = markerElem.getAttribute('email');
var phone_no = markerElem.getAttribute('phone_no');

var latx =markerElem.getAttribute('lat');
var lngx =markerElem.getAttribute('lng');

              var point = new google.maps.LatLng(
                  parseFloat(markerElem.getAttribute('lat')),
                  parseFloat(markerElem.getAttribute('lng')));

$('#loader').hide();

              var infowincontent = document.createElement('div');
             var strong = document.createElement('strong');
              strong.textContent = name
              infowincontent.appendChild(strong);
              infowincontent.appendChild(document.createElement('br'));

              var text = document.createElement('text');
              text.textContent = address
              infowincontent.appendChild(text);
              var icon = customLabel[type] || {};


                var map_data = "<div style='background:#c1c1c1; border-bottom: 2px dashed purple;'>" +
"<div style='background:#800000;color:white;padding:10px;'>Users Map Location</div><br />" +

"<img src=" + photo +" style='width:10px;max-width:10px;max-height:10px;height:150px;border-radius:50%'><br>" +
"<span><b> Name:</b> " + fullname + "</span><br />" +
"<span><b>Case No:</b> " + case_no + "</span><br />" +
"<span><b>Report Title:</b> " + report_type + "</span><br />" +
"<span><b>Comments:</b> " + comments + "</span><br />" +
"<span><b>Email:</b> " + email + "</span><br />" +
"<span><b>Phone No:</b> " + phone_no + "</span><br />" +
"<span><b>Latitude:</b> " + latx + "</span><br />" +
"<span><b>Longitude:</b> " + lngx + "</span><br />" +
"<span><b>Location Address: </b>" + address + "</span><br />" +

  "<span><b> <span class='fa fa-calendar'></span>Time:</b></span>" +
"<span data-livestamp='" + timing + "'></span></span><br /><br />"+
                    "</div>";



              var marker = new google.maps.Marker({
                map: map,
                position: point,
                label: icon.label,
 title : 'welcome'
              });
              marker.addListener('click', function() {
                //infoWindow.setContent(infowincontent);

//infoWindow.setContent('<b>'+name + "</b><br>" + address);

infoWindow.setContent(map_data);
                infoWindow.open(map, marker);
              });
            });
          });
		  
		   });  // close jquery clickbutton
        }



      function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }
        };

        request.open('GET', url, true);
        request.send(null);
      }

      function doNothing() {}

 $('#myModal_map').on('shown.bs.modal', function(){
    //init();
initMap();

    });


    </script>

  


<!-- end map loading-->





        </div>
      

   <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>


      </div>


      </div>
    </div>
  </div>
</div>



<!-- map modal ends here -->


    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=<?php echo $google_map_keys; ?>&callback=initMap">
    </script>










<!-- settings  modal starts here -->


<div class="container_map">

  <div class="modal fade" id="myModal_settings" role="dialog">
    <div class="modal-dialog modal-lg  modal-appear-center1 pull-right1_no modaling_sizing1  full-screen-modal_no">
      <div class="modal-content">
        <div class="modal-header" style="color:black;background:#c1c1c1">
 

      
 <button type="button" class="close btn btn-warning" data-dismiss="modal">Close</button>

      <h4 class="modal-title">Application Settings</h4>
        </div>
        <div class="modal-body">



<!-- start-->


  


<center><h2 style='color:#800000'>Application Settings</h2><br>



<script>

//Email Config starts

$(document).ready(function(){
$('#mail_btn').click(function () {

var smtp_email_host  = $('#smtp_email_host').val();
var smtp_email_username = $('#smtp_email_username').val();
var smtp_email_password = $('#smtp_email_password').val();
var smtp_email_port = $('#smtp_email_port').val();
var sms_username = $('#sms_username').val();
var sms_password = $('#sms_password').val();
var google_api_key = $('#google_api_key').val();

var admin_name = $('#admin_name').val();
var admin_email = $('#admin_email').val();
var admin_phone_no = $('#admin_phone_no').val();


if(admin_name==""){
alert('please Enter Admin Name/Site Name for sending Email and SMS to Users');
}

else if(admin_email==""){
alert('please Enter Admin Email');
}

else if(admin_phone_no==""){
alert('please Enter Admin Phone No.');
}


else if(google_api_key==""){
alert('please Enter Google Map API Key');
}

else if(sms_username==""){
alert('please Enter Sms Username');
}

else if(sms_password==""){
alert('please Enter SMS Password');
}


else if(smtp_email_host==""){
alert('please Enter SMTP Email Host (eg. mail.gmail.com or mail.example.com)');
}

else if(smtp_email_username==""){
alert('please Enter SMTP Email User (Eg. support@example.com or fred@gmail.com');
}

else if(smtp_email_password==""){
alert('please Enter SMTP Email Password');
}


else if(smtp_email_port==""){
alert('please Enter SMTP Email PortNo (Eg: 587)');
}

else{


$("#loader_mail").fadeIn(400).html('<br><div style="color:white;background:#800000;padding:10px;"><img src="<?php echo $site_url; ?>img/loader.gif">&nbsp;Please Wait, Your Email, Google Map & SMS Server Config is being Updated...</div>');
var datasend = {admin_name:admin_name,admin_email:admin_email,admin_phone_no:admin_phone_no, sms_username:sms_username,sms_password:sms_password,google_api_key:google_api_key, smtp_email_host:smtp_email_host, smtp_email_username:smtp_email_username, smtp_email_password:smtp_email_password, smtp_email_port:smtp_email_port};
	
		$.ajax({
			
			type:'POST',
			url:'configure_settings.php',
			data:datasend,
dataType: 'json',
                        crossDomain: true,
			cache:false,
			success:function(msg){

if(msg.status == 0){
var messagex = msg.message;
alert(messagex);

$('#result_mail').html("<div style='color:white;background:red;padding:8px;border:none;'>" +messagex+ "</div>");
setTimeout(function(){ $('#result_mail').html(''); }, 5000);

$('#loader_mail').hide();
}


if(msg.status == 1){
var messagex = msg.message;
alert(messagex);

$('#result_mail').html("<div style='color:white;background:green;padding:8px;border:none;'>" +messagex+ "</div>");
setTimeout(function(){ $('#result_mail').html(''); }, 5000);

$('#smtp_email_password').val('');

$('#loader_mail').hide();
location.reload();


}


	
}
			
		});
		
		}

});

});

//  Email Config ends




</script>


<!--start Email Server Configurations-->

<div class='row'>

<div class='col-sm-8'>

<span style='color:red;font-size:18px;'>Configure Your Google MAP API Key, SMS & Mail Server Credentials </span><br><br>




<div class='alert alert-info'>
<h3>Admin Info</h3>

 <div class="form-group">
              <label>Admin/Site Name For sending Email and SMS to Users (Maximum of 11 Words)</label>
              <input type="text" maxlength="11" class="col-sm-12 form-control" id="admin_name"  value="savehumanty" placeholder="Admin/Site Name(Maximum of 11 Words)">
            </div>
 <div class="form-group">
              <label>Email to Recieve Reports from Users</label>
              <input type="text" class="col-sm-12 form-control" id="admin_email" placeholder="Email to Recieve Reports from Users">
            </div>
 <div class="form-group">
              <label>Phone No. to Recieve Reports from Users(Add + sign Eg: +1200000000)</label>
              <input type="text" class="col-sm-12 form-control" id="admin_phone_no" placeholder="Phone No. to Recieve Reports from Users">
            </div>



<br>
</div>
<br>





<div class='well'>

 <div class="form-group">
              <label>Your Google Map Javascript API Key</label>
              <input type="text" class="col-sm-12 form-control" id="google_api_key"  placeholder="Your Google Map Javascript API Key">
            </div><br>
</div>
<br>

<div class='alert alert-danger'>

<h3>SMS Configuration</h3>

We are using Nigerian BulkSMS ( https://nigeriabulksms.com/sms-gateway-api-in-nigeria/ )<br>
 <div class="form-group">
              <label>SMS Username</label>
              <input type="text" class="col-sm-12 form-control" id="sms_username"  placeholder="Your SMS Username">
            </div>

 <div class="form-group">
              <label>Your SMS Password</label>
              <input type="text" class="col-sm-12 form-control" id="sms_password"  placeholder="Your SMS Password">
            </div>
<br>
</div>

<br>


<div class='well'>
 <div class="form-group">
              <label>Your SMTP Mail Server (EG: mail.example.com, mail.gmail.com etc.)</label>
              <input type="text" class="col-sm-12 form-control" id="smtp_email_host"  placeholder="Your Mail SMTP SERVER">
            </div>




 <div class="form-group">
              <label>SMTP Mail Username (EG: support@example.com fred@gmail.com etc.)</label>
              <input type="text" class="col-sm-12 form-control" id="smtp_email_username"  placeholder="SMTP Mail Username">
            </div>

 <div class="form-group">
              <label>SMTP Mail Password</label>
              <input type="text" class="col-sm-12 form-control" id="smtp_email_password"  placeholder="SMTP Mail Password">
            </div>

 <div class="form-group">
              <label>Email Port No:  (Eg: 587)</label>
              <input type="text" class="col-sm-12 form-control" id="smtp_email_port"  value="587">
            </div>

<br>
</div>

<br>


 <div class="form-group">

						<div id="loader_mail"></div>
                        <div class="result_mail"></div>
                    </div>

                    <input type="button" id="mail_btn" class="pull-right btn btn-primary" value="Update/Edit Settings" />

</div>





<div class='col-sm-4'>

<?php

//include('data6rst.php');
$res= $db->prepare("SELECT * FROM settings WHERE data_type =:data_type order by id desc");
$res->execute(array(':data_type' => '0'));
$row = $res->fetch();
$count = $res->rowCount();

if($count > 0){
$smtp_email_host = $row['smtp_email_host'];
$smtp_email_username = $row['smtp_email_username'];
$smtp_email_password = $row['smtp_email_password'];

$google_api_key = substr($row['google_api_key'], 0, 2)."...";
$sms_password = substr($row['sms_password'], 0, 2)."...";
$sms_username= substr($row['sms_username'], 0, 2)."...";

$micro_pass = substr($smtp_email_password, 0, 2)."...";
$smtp_email_port = $row['smtp_email_port'];

$admin_namex = $row['admin_name'];
$admin_emailx = $row['admin_email'];
$admin_phone_nox = $row['admin_phone_no'];

echo "


<br><h3 style='color:#800000'>Admin Info</h3>
<div><b>Admin/Site Name:</b> $admin_namex</div>
<div><b>Admin Email for Recieving Reports:</b> $admin_emailx</div>
<div><b>Admin Phone for Receieving Reports:</b> $admin_phone_nox</div>


<br><h3 style='color:#800000'>Google Map Configured Data</h3>
<div><b>Google API Key:</b> $google_api_key</div>

<br><h3 style='color:#800000'>SMS Config Data</h3>
<div><b>SMS Username:</b> $sms_username</div><br>
<div><b>SMS Password:</b> $sms_password</div>

<br><h3 style='color:#800000'>Mail Server Config Data</h3>
<div><b>SMTP Mail Host:</b> $smtp_email_host</div><br>
<div><b>SMTP Mail Username:</b> $smtp_email_username</div><br>
<div><b>SMTP Mail Password:</b> $micro_pass </div><br>
<div><b>SMTP Mail Port No.:</b> $smtp_email_port </div><br>


";


}else{


echo "<div style='background:red;padding:8px;color:white;border:none;'>Apps Configuration Settings is Empty...</div>";
}




?>

</div></div>

<!--End Mail Server Config-->








<!-- end-->





        </div>
      

   <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>


      </div>


      </div>
    </div>
  </div>
</div>



<!-- settings modal ends here -->






</body>
</html>

