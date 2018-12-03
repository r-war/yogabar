<?php
require_once "session.php";
 include realpath(__DIR__ . '/../..')."/configs/config.php";
//require_once(realpath(__DIR__ . '/../..')."/configs/db/Db.class.php");
//$db = new Db();
$id = $_REQUEST['id'];
if (!($id > 0))
{
	header("location:events.php");
	exit();
}
if ($_POST){
	$title = $_POST["title"];		
 	$description = $_POST["content"];
 	$is_active = $_POST['is_active'] ? 1:0;
 	$event_date =$_POST['event_date'];
 	$e_cat_id=$_POST['selCat'];
    $price =$_POST['price'];
 	$sql = "UPDATE events SET e_cat_id=$e_cat_id, price='".$price."', name='".addslashes($title)."', description='".addslashes($description)."', 
 	is_active={$is_active}, event_date = '".addslashes($event_date)."', updated_at=now() WHERE id=".$id;
 	$db->query($sql);
 	$smarty->assign('event_add', "The event updated successfully");
}
$sql = "SELECT * FROM events where id=".$id;
$events_rs = $db->query($sql);
$get_e_cat_id=isset($events_rs->row['e_cat_id'])?$events_rs->row['e_cat_id']:0;
$sqlcat = "SELECT * FROM  events_category where is_active=1";
$result = $db->query($sqlcat);
foreach($result->rows  as $key=>$val)
{
	if($get_e_cat_id==$val['e_cat_id']){
		$PushSelecVal.="<option selected='true' value='".$val['e_cat_id']."'>".$val['events_cat']."</option>";
	}
	else{
		$PushSelecVal.="<option   value='".$val['e_cat_id']."'>".$val['events_cat']."</option>";
	} 	    
}
$smarty->assign('Push_SelecVal',$PushSelecVal);
$smarty->assign('events_rs', $events_rs->row);
$smarty->assign('e_cat_ids', $get_e_cat_id);

$smarty->assign('events', "active");
$smarty->display('admin/events_edit.tpl');
?>