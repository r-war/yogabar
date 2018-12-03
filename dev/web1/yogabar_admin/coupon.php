<?php
require_once "session.php";
include realpath(__DIR__ . '/../..')."/configs/config.php";
if ($_GET['id']){	
	$sql = "DELETE FROM coupon where id=".$_GET['id'];
	$db->query($sql);
}
$sql = "SELECT * FROM `coupon` order by id Desc";
$result = $db->query($sql);

$smarty->assign('coupon_rs',$result->rows );
$smarty->assign('coupon', "active");

$smarty->display('admin/coupon.tpl');
?>