
<?php 




if (isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST") {

include('data6rst.php');

// get total count
$pstmt = $db->prepare('SELECT * FROM welfare_reports');
$pstmt->execute();
$total_count = $pstmt->rowCount();

// ensure that they cotain only alpha numericals
if(strip_tags(isset($_POST["get_content"]))){
$get_content = strip_tags($_POST["get_content"]);
if($get_content == 'get_data'){

$sql_query = '';
$error = '';
$message='';
$response_bl = array();

$sql_query .= "SELECT * FROM welfare_reports ";
if(strip_tags(isset($_POST["search"]["value"]))){

//$search_value= strip_tags($_POST["search"]["value"]);
$search_value1= strip_tags($_POST["search"]["value"]);
$search_value=  htmlentities(htmlentities($search_value1, ENT_QUOTES, "UTF-8"));

$sql_query .= 'WHERE fullname LIKE "%'.$search_value.'%" ';
$sql_query .= 'OR phone_no LIKE "%'.$search_value.'%" ';
$sql_query .= 'OR email LIKE "%'. $search_value.'%" ';
$sql_query .= 'OR case_no LIKE "%'. $search_value.'%" ';
$sql_query .= 'OR status LIKE "%'. $search_value.'%" ';
$sql_query .= 'OR phone_no LIKE "%'. $search_value.'%" ';
$sql_query .= 'OR address LIKE "%'. $search_value.'%" ';
  }

//ensure that order post is set
$start = $_POST['start'];
$length = $_POST['length'];
$draw= $_POST["draw"];
if(strip_tags(isset($_POST["order"]))){
$order_column = strip_tags($_POST['order']['0']['column']);
$order_dir = strip_tags($_POST['order']['0']['dir']);

$sql_query .= 'ORDER BY '.$order_column.' '.$order_dir.' ';
}
else{
$sql_query .= 'ORDER BY id DESC ';
}
if($length != -1){
$sql_query .= 'LIMIT ' . $start . ', ' . $length;
}

$pstmt = $db->prepare($sql_query);
$pstmt->execute();
$rows_count = $pstmt->rowCount();

//$result = $pstmt->fetchAll();
//foreach($result as $row){
while($row = $pstmt->fetch()){
$rows1 = array();
$id = $row['id'];
$fullname = $row['fullname'];
$case_no = $row['case_no'];
$timing = $row["timing"];
$email_count = $row["email_count"];
$sms_count = $row["sms_count"];

$phone_no = $row['phone_no'];
$address = $row['address'];
$comments = $row['comments'];

$report_type = $row['report_type'];

$status = $row['status'];

$rt= "<span style='color:purple;font-size:16px;'><b>$report_type</b></span>";
$com= "<span style='color:green;font-size:14px;'>$comments</span>";

if($status == 'Open'){

$st = "Awaiting Resolving";
$colorx ="red_css";
}else{

$st = "Resolved";
$colorx ="green_css";

}




if($status == 'Open'){


                  
$rxc= "<div style='color:green;background:;padding:4px;font-size:12px;' id='status1_$id'></div>
<button id='statushide_$id' title='Click to Mark as Resolved' class='report_css updates_btn'
 data-id='$id'
 data-userid='$id'
 >
 Click to Mark as Resolved</button>
 <div class='loader-updates_$id'></div>
   <div class='result-updates_$id'></div>";

}else{
$rxc="<div style='color:green;background:;padding:4px;font-size:12px;'>Resolved";

}


//<span class="badge bg-success email_count">('.$email_count.')Email</span>


        

$rows1[] = $fullname;
$rows1[] = $row['case_no'];

$rows1[] = $rt;
$rows1[] = $com;
$rows1[] = $row['address'];
$rows1[] = $row['phone_no'];
$rows1[] = '<span id="statushide2_'.$id.'" class="'.$colorx.'" > '.$st.' </span><span id="status_'.$id.'" class="stx_'.$id.'" > </span> <span>'.$rxc.'</span>';

$rows1[] = '<span data-livestamp="'.$timing.'"></span>';

$rows1[] = '<button type="button"  class="btn btn-success btn-xs btn_call "  data-toggle="modal" data-target="#myModal_map"
data-id="'. intval($row["id"]).'"
data-case_no="'. strip_tags($row["case_no"]).'"
data-email="'. strip_tags($row["email"]).'"
data-fullname="'. strip_tags($row["fullname"]).'"
data-address="'. strip_tags($row["address"]).'"
data-report_type="'. strip_tags($row["report_type"]).'"
data-comments="'. strip_tags($row["comments"]).'"
data-phone_no="'. strip_tags($row["phone_no"]).'"
data-status="'. strip_tags($row["status"]).'"
data-timing="'. strip_tags($row["timing"]).'"
data-lat="'. strip_tags($row["lat"]).'"
data-lng="'. strip_tags($row["lng"]).'"

>Map Location</button>

<button type="button"  class="btn btn-info btn-xs btn_call" data-toggle="modal" data-target="#myModal_sms"
data-id="'. intval($row["id"]).'"
data-case_no="'. strip_tags($row["case_no"]).'"
data-email="'. strip_tags($row["email"]).'"
data-fullname="'. strip_tags($row["fullname"]).'"
data-address="'. strip_tags($row["address"]).'"
data-report_type="'. strip_tags($row["report_type"]).'"
data-comments="'. strip_tags($row["comments"]).'"
data-phone_no="'. strip_tags($row["phone_no"]).'"
data-status="'. strip_tags($row["status"]).'"
data-timing="'. strip_tags($row["timing"]).'"
data-lat="'. strip_tags($row["lat"]).'"
data-lng="'. strip_tags($row["lng"]).'
>Send SMS <span class="badge bg-danger sms_count">('.$sms_count.')SMS</span></button>


<button type="button"  class="btn btn-primary btn-xs btn_call" data-toggle="modal" data-target="#myModal_email"
data-id="'. intval($row["id"]).'"
data-case_no="'. strip_tags($row["case_no"]).'"
data-email="'. strip_tags($row["email"]).'"
data-fullname="'. strip_tags($row["fullname"]).'"
data-address="'. strip_tags($row["address"]).'"
data-report_type="'. strip_tags($row["report_type"]).'"
data-comments="'. strip_tags($row["comments"]).'"
data-phone_no="'. strip_tags($row["phone_no"]).'"
data-status="'. strip_tags($row["status"]).'"
data-timing="'. strip_tags($row["timing"]).'"
data-lat="'. strip_tags($row["lat"]).'"
data-lng="'. strip_tags($row["lng"]).'
>Send Email<span class="badge bg-success email_count">Email</span> </button>

 <div class="loader-delete_'. intval($row["id"]).'"></div>
   <div class="result-delete_'. intval($row["id"]).'"></div>
<button type="button"  data-id="'. intval($row["id"]).'" class="btn btn-danger btn-xs delete_btnx">Delete</button>';


$response_bl[] = $rows1;
}

$data = array(
"draw"    => $draw,
"recordsTotal"  => $rows_count,
"recordsFiltered" => $total_count,
"data"    => $response_bl);
}// you can close this



 echo json_encode($data);
}



}
else{
echo "<div id='alertdata_uploadfiles' style='background:red;color:white;padding:10px;border:none;'>
Direct Page Access not Allowed<br></div>";
}




?>