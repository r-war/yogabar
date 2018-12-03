<?php 
include realpath(__DIR__ . '/..')."/configs/config.php";
$id = $_GET['id'];
if (!($id>0)){
	$msg = array("error" => "Invalid Request");
} 
else{
	$sql = "SELECT * FROM events where id =".$id;
	$result = $db->query($sql);
	if($result->num_rows > 0)
	{
		$msg = str_replace('../', '', $result->row);
	}
	else{
		$msg = array("error" => "Invalid Request");
	}
}
$smarty->assign('events',$msg);
$smarty->display('events.tpl');
