<?php 
include realpath(__DIR__ . '/..')."/configs/config.php";

$sql = "SELECT * FROM `packages` where group_type_id =1 order by id Desc";
$result = $db->query($sql);

$sql = "SELECT * FROM `packages` where group_type_id =2 order by id Desc";
$result_rs = $db->query($sql);

$sql = "SELECT * FROM `packages` where group_type_id =3 order by id Desc";
$room_rs = $db->query($sql);

$smarty->assign('room_rs', $room_rs->rows);
$smarty->assign('group_rs', $result->rows);
$smarty->assign('private_rs', $result_rs->rows);

$smarty->assign('package', "active");

$smarty->display('package.tpl');