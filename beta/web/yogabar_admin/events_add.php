<?php
require_once "session.php";
include realpath(__DIR__ . '/../..')."/configs/config.php";

if ($_POST){
	$title = $_POST["title"];		
 	$description = $_POST["content"];
 	$is_active = $_POST['is_active'] ? 1:0;
 	$event_date =$_POST['event_date'];
 	$sql = "INSERT INTO events SET name='".addslashes($title)."', description='".addslashes($description)."', 
 		is_active={$is_active}, event_date = '".addslashes($event_date)."', created_at=now(), updated_at=now();";
 	$db->query($sql);
 	$smarty->assign('events_add', "The event added successfully");
}
$smarty->assign('events', "active");
$smarty->display('admin/events_add.tpl');
?>