<?php 
 // ensure that there is no whitespace and included file quickbase_token.php does not have whitespace
header("Content-type: text/xml");
include('data6rst.php');
//include('db_connect_map.php');
// Start XML file, create parent node
$dom = new DOMDocument("1.0");
$node = $dom->createElement("markers");
$parnode = $dom->appendChild($node);
$identity = strip_tags($_GET['identity']);
//$result = $db->prepare("SELECT * FROM welfare_reports");
//$result->execute(array());
$result = $db->prepare("SELECT * FROM welfare_reports  where id=:id");
$result->execute(array(':id' =>$identity));
header("Content-type: text/xml");
while ($v1 = $result->fetch()) {
                $id = $v1['id'];
                $postid = $v1['id'];
 $case_no = $v1['case_no'];
 $email = $v1['email'];
$phone_no = $v1['phone_no'];
$fullname = $v1['fullname'];
$address = $v1['address'];
$report_type = $v1['report_type'];
 $comments = $v1['comments'];
 $timing = $v1['timing'];
$lat = $v1['lat'];
$lng = $v1['lng'];
 $photo = 'logo.png';
$data ='public';
$type = 1;
$node = $dom->createElement("marker");
  $newnode = $parnode->appendChild($node);
  $newnode->setAttribute("id",$id);
$newnode->setAttribute("case_no",$case_no);
$newnode->setAttribute("name",$fullname);
$newnode->setAttribute("address", $address);
$newnode->setAttribute("report_type",$report_type);
$newnode->setAttribute("comments",$comments);
$newnode->setAttribute("email",$email);
$newnode->setAttribute("phone_no",$phone_no);
$newnode->setAttribute("timing", $timing);
$newnode->setAttribute("lat", $lat);
$newnode->setAttribute("lng", $lng);
$newnode->setAttribute("photo",$photo);
$newnode->setAttribute("type", $type);
  $newnode->setAttribute("data_type", $data);
$newnode->setAttribute("fullname", $fullname);
}
echo $dom->saveXML();
?>