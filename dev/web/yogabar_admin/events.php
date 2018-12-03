<?php
require_once "session.php";
include realpath(__DIR__ . '/../..')."/configs/config.php";
if ($_GET['id']){	
	$sql = "DELETE FROM events where id=".$_GET['id'];
	$db->query($sql);
}
$sql = "SELECT * FROM `events` order by id Desc";
$result = $db->query($sql);

$smarty->assign('events_rs',$result->rows );
$smarty->assign('events', "active");

$smarty->display('admin/events.tpl');
?>