<?php
require_once "session.php";
include realpath(__DIR__ . '/../..')."/configs/config.php";
$id = $_REQUEST['id'];
if (!($id > 0))
{
	header("location:teacher.php");
	exit();
}
if ($_POST){
	$title = $_POST["title"];		
 	$description = $_POST["content"];
 	$is_active = $_POST['is_active'] ? 1:0;
 	$sql = "UPDATE teacher SET name='".addslashes($title)."', description='".addslashes($description)."', is_active={$is_active}, updated_at=now() WHERE id=".$id;
 	$db->query($sql);
 	$smarty->assign('teacher_add', "The teacher profile updated successfully");
}
$sql = "SELECT * FROM teacher where id=".$id;
$blog_rs = $db->query($sql);
$smarty->assign('teacher_rs', $blog_rs->row);
$smarty->assign('teacher', "active");
$smarty->display('admin/teacher_edit.tpl');
?>