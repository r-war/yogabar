<?php
require_once "session.php";
include realpath(__DIR__ . '/../..')."/configs/config.php";
$id = $_REQUEST['id'];
if (!($id > 0))
{
	header("location:package.php");
	exit();
}
if ($_POST){
	$name = $_POST["name"];		
 	$price = $_POST["price"];
 	$group_type = $_POST['group_type'];
 	$sql = "UPDATE packages SET name='".addslashes($name)."', price='".addslashes($price)."', group_type_id={$group_type}, updated_at=now() WHERE id=".$id;
 	$db->query($sql);
 	$smarty->assign('package_add', "The package updated successfully");
}
$sql = "SELECT * FROM packages where id=".$id;
$blog_rs = $db->query($sql);
$smarty->assign('package_rs', $blog_rs->row);
$smarty->assign('pacakge', "active");
$smarty->display('admin/package_edit.tpl');
?>