<?php 
include realpath(__DIR__ . '/..')."/configs/config.php";
$id = $_GET['id'];
if (!($id>0)){
	$msg = array("error" => "Invalid Request");
} 
else{
	$sql = "SELECT id,name,description,is_active,DATE_FORMAT(event_date,'%d-%b-%Y') as event_date,created_at,updated_at FROM events where id =".$id;
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
