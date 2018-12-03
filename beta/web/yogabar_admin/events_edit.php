<?php
require_once "session.php";
include realpath(__DIR__ . '/../..')."/configs/config.php";
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
 	$sql = "UPDATE events SET name='".addslashes($title)."', description='".addslashes($description)."', 
 	is_active={$is_active}, event_date = '".addslashes($event_date)."', updated_at=now() WHERE id=".$id;
 	$db->query($sql);
 	$smarty->assign('event_add', "The event updated successfully");
}
$sql = "SELECT * FROM events where id=".$id;
$events_rs = $db->query($sql);
$smarty->assign('events_rs', $events_rs->row);
$smarty->assign('events', "active");
$smarty->display('admin/events_edit.tpl');
?>