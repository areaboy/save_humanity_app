<?php
error_reporting(0);

ini_set('max_execution_time', 300); //300 seconds = 5 minutes
// temporarly extend time limit
set_time_limit(300);

include('data6rst.php');
$obj = (object) array('role' => 'style', 'type' => 'string');
$data[] = array('Social Reports Data Over Time', '-', $obj);




$result = $db->prepare("SELECT * FROM welfare_reports");
$result->execute(array());
$rows = $result->fetch();
$total_report = $result->rowCount();



$resultc = $db->prepare("SELECT * FROM welfare_reports where status='Open' ");
$resultc->execute(array());
$rowsc = $resultc->fetch();
$counting_open = $resultc->rowCount();




$resultc = $db->prepare("SELECT * FROM welfare_reports where status='Closed' ");
$resultc->execute(array());
$rowsc = $resultc->fetch();
$counting_closedx = $resultc->rowCount();


$data[] = array('Total Reports Over Time',(int)$total_report, 'purple');
$data[] = array('Total Reports Awaiting Resolving',(int)$counting_open, 'gold');
$data[] = array('Total Reports Resolved',(int)$counting_closedx, 'navy');


echo json_encode($data);

?>