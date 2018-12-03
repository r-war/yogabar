<?php
require_once "session.php";
include realpath(__DIR__ . '/../..')."/configs/config.php";

if ($_POST){
	$title = $_POST["name"];		
 	$price = $_POST["discount"];
 	
 	$sql = "INSERT INTO coupon SET code='".addslashes($title)."', discount='".addslashes($price)."', created_at=now(), updated_at=now();";
 	$db->query($sql);
 	$smarty->assign('coupon_add', "The Coupon added successfully");
}
$smarty->assign('coupon', "active");
$smarty->display('admin/coupon_add.tpl');
?>