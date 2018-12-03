<?php 
session_start();
include realpath(__DIR__ . '/..')."/configs/config.php";


$ChkLogin=0;
 if(isset($_SESSION) && isset($_SESSION['UID']))
{

if($_SESSION['UID']!=""){
    
  $ChkLogin=1;
   
}
}



$id = $_GET['id'];
if (!($id>0)){
	$msg = array("error" => "Invalid Request");
} 
else{
	$sql = "SELECT id,name,description,is_active,DATE_FORMAT(event_date,'%d-%b-%Y') as event_date,created_at,updated_at,price FROM events where id =".$id;
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
$smarty->assign('ChkLogin',$ChkLogin);
 

$smarty->display('events1.tpl');
