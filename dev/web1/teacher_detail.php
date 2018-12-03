<?php 
include realpath(__DIR__ . '/..')."/configs/config.php";
$id = $_GET['id'];
if (!($id >0))
	redirect("teacher.php");

$sql = "SELECT * FROM `teacher` where is_active=1 and id=".$id;
$result = $db->query($sql);
if (!($result->num_rows > 0))
	redirect("teacher.php");

$smarty->assign('teacher_rs',$result->row );

$smarty->assign('news', "active");

$smarty->display('teacher_detail.tpl');