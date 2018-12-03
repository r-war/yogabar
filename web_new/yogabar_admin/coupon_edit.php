<?php
require_once "session.php";
include realpath(__DIR__ . '/../..')."/configs/config.php";
$id = $_REQUEST['id'];
if (!($id > 0))
{
	header("location:coupon.php");
	exit();
}
if ($_POST){
	$name = $_POST["name"];		
 	$price = $_POST["discount"];
 	$group_type = $_POST['group_type'];
 	$sql = "UPDATE coupon SET code='".addslashes($name)."', discount='".addslashes($price)."', updated_at=now() WHERE id=".$id;
 	$db->query($sql);
 	$smarty->assign('coupon_add', "The Coupon updated successfully");
}
$sql = "SELECT * FROM coupon where id=".$id;
$blog_rs = $db->query($sql);
$smarty->assign('coupon_rs', $blog_rs->row);
$smarty->assign('coupon', "active");
$smarty->display('admin/coupon_edit.tpl');
?>