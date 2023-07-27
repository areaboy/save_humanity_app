<?php
error_reporting(0);

if (isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST") {
$id = strip_tags($_POST['id']);


include('data6rst.php');
if($id != ''){
// query table posts to get data
$result = $db->prepare('UPDATE welfare_reports set status =:status WHERE id =:id');
$result->execute(array(':status' => 'Closed', ':id' => $id));

}
$return_arr = array("status"=>'Resolved',"message"=>'1');
echo json_encode($return_arr);


}
else{
echo "<div id='' style='background:red;color:white;padding:10px;border:none;'>
Direct Page Access not Allowed<br></div>";
}

?>