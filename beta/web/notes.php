<?php 
include realpath(__DIR__ . '/..')."/configs/config.php";

$sql = "SELECT * FROM events order by id Desc";
$result = $db->query($sql);

$smarty->assign('events_rs',$result->rows );

$smarty->assign('news', "active");

$smarty->display('notes.tpl');