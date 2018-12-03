<?php 
include realpath(__DIR__ . '/..')."/configs/config.php";

$sql = "SELECT id,name,description,is_active,DATE_FORMAT(event_date,'%d-%b-%Y') as event_date,created_at,updated_at FROM events order by id Desc";
$result = $db->query($sql);

$smarty->assign('events_rs',$result->rows );

$smarty->assign('news', "active");

$smarty->display('notes.tpl');
