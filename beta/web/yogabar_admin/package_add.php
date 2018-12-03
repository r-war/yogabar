<?php
require_once "session.php";
include realpath(__DIR__ . '/../..')."/configs/config.php";

if ($_POST){
	$title = $_POST["name"];		
 	$price = $_POST["price"];
 	$group_type = $_POST['group_type'];
 	$sql = "INSERT INTO packages SET name='".addslashes($title)."', price='".addslashes($price)."', group_type_id={$group_type}, created_at=now(), updated_at=now();";
 	$db->query($sql);
 	$smarty->assign('package_add', "The package added successfully");
}
$smarty->assign('package', "active");
$smarty->display('admin/package_add.tpl');
?>