<?php
require_once "session.php";
include realpath(__DIR__ . '/../..')."/configs/config.php";
if ($_GET['id']){	
	$sql = "DELETE FROM packages where id=".$_GET['id'];
	$db->query($sql);
}
$sql = "SELECT * FROM `packages` order by id Desc";
$result = $db->query($sql);

$smarty->assign('package_rs',$result->rows );
$smarty->assign('package', "active");

$smarty->display('admin/package.tpl');
?>