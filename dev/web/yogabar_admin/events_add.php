<?php
require_once "session.php";
include realpath(__DIR__ . '/../..')."/configs/config.php";
require_once(realpath(__DIR__ . '/../..')."/configs/db/Db.class.php");
$db = new Db();

if ($_POST){
	$title = $_POST["title"];		
 	$description = $_POST["content"];
 	$is_active = $_POST['is_active'] ? 1:0;
 	$event_date =$_POST['event_date'];
 	$e_cat_id=$_POST['selCat'];
 	$price=$_POST['price'];
 	if($e_cat_id !=1)
 	{
 		//$price='';
 	}

   
 	$sql = "INSERT INTO events SET e_cat_id=$e_cat_id, price='".$price."', name='".addslashes($title)."', description='".addslashes($description)."', 
 		is_active={$is_active}, event_date = '".addslashes($event_date)."', created_at=now(), updated_at=now();";
 	$db->query($sql);
 	$smarty->assign('events_add', "The event added successfully");
}

$sql = "SELECT * FROM  events_category where is_active=1";
$result = $db->query($sql);

$PushSelecVal="<option value=''>---Events Category---</option>";
foreach($result AS $key=>$val)
{
	$PushSelecVal.="<option value='".$val['e_cat_id']."'>".$val['events_cat']."</option>";   
}
$smarty->assign('Push_SelecVal', "$PushSelecVal");
$smarty->assign('events', "active");
$smarty->display('admin/events_add.tpl');
?>
