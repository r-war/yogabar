<?php
require_once "session.php";
include realpath(__DIR__ . '/../..')."/configs/config.php";
if ($_GET['id']){
	$sql = "SELECT * FROM img_gallery where id_category =".$_GET['id'];
	$result = $db->query($sql);
	if ($result->num_rows > 0){
		unlink(GALLERY.$result->row['img_path']);
		$sql = "DELETE FROM img_gallery where id=".$_GET['id'];
		$db->query($sql);
	}
}
$sql = "SELECT * FROM `gallery_category` order by id_category Desc";
$result = $db->query($sql);

$smarty->assign('gallery_rs',$result->rows );
$smarty->assign('gallery', "active");

$smarty->display('admin/gallery_cat.tpl');
?>