<?php
require_once "session.php";
include realpath(__DIR__ . '/../..')."/configs/config.php";
if ($_GET['id']){	
	$sql = "DELETE FROM teacher where id=".$_GET['id'];
	$db->query($sql);
}
$sql = "SELECT * FROM `teacher` order by id Desc";
$result = $db->query($sql);

$smarty->assign('teacher_rs',$result->rows );
$smarty->assign('teacher', "active");

$smarty->display('admin/teacher.tpl');
?>