<?php
require_once "session.php";
include realpath(__DIR__ . '/../..')."/configs/config.php";
if ($_GET['id']){
	$sql = "SELECT * FROM img_gallery where id =".$_GET['id'];
	$result = $db->query($sql);
	if ($result->num_rows > 0){
		unlink(GALLERY.$result->row['img_path']);
		$sql = "DELETE FROM img_gallery where id=".$_GET['id'];
		$db->query($sql);
	}
}
$sql = "SELECT * FROM img_gallery ig, gallery_category gs where ig.img_category = gs.id_category order by id Desc";
$result = $db->query($sql);


$smarty->assign('gallery_rs',$result->rows );
$smarty->assign('gallery', "active");
$smarty->display('admin/gallery_list.tpl');

?>