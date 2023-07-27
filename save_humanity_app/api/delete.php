<?php
error_reporting(0);

if (isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST") {
$id = strip_tags($_POST['id']);

include('data6rst.php');
$del = $db->prepare('DELETE FROM welfare_reports where id = :id');

		$del->execute(array(
			':id' => $id
    ));


if($del){

echo 1;
}else{

echo 0;
}



}
else{
echo "<div id='' style='background:red;color:white;padding:10px;border:none;'>
Direct Page Access not Allowed<br></div>";
}

?>