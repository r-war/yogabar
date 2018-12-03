<?php
require_once "session.php";
include realpath(__DIR__ . '/../..')."/configs/config.php";
if ($_GET['id']){	
	$sql = "DELETE FROM coupon where id=".$_GET['id'];
	$db->query($sql);
}
$sql = "SELECT id,code,dis_type_id,discount,DATE_FORMAT(coupon_from,'%d-%m-%Y') as coupon_from,DATE_FORMAT(coupon_to,'%d-%m-%Y') as coupon_to,created_at,updated_at,active FROM `coupon` order by id Desc";
$result = $db->query($sql);

$smarty->assign('coupon_rs',$result->rows );
$smarty->assign('coupon', "active");

$smarty->display('admin/coupon.tpl');
?>