<?php
require_once "session.php";
include realpath(__DIR__ . '/../..')."/configs/config.php";

if ($_POST){
	$title = $_POST["title"];		
 	$description = $_POST["content"];
 	$is_active = $_POST['is_active'] ? 1:0;
 	$sql = "INSERT INTO teacher SET name='".addslashes($title)."', description='".addslashes($description)."', is_active={$is_active}, created_at=now(), updated_at=now();";
 	$db->query($sql);
 	$smarty->assign('teacher_add', "The teacher profile added successfully");
}
$smarty->assign('teacher', "active");
$smarty->display('admin/teacher_add.tpl');
?>