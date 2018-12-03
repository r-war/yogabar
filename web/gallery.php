<?php 
include realpath(__DIR__ . '/..')."/configs/config.php";

$sql = "SELECT * FROM img_gallery ig, gallery_category gs where ig.img_category = gs.id_category order by id Desc";
$result = $db->query($sql);

$gallery_sql = "SELECT * from gallery_category";

$smarty->assign('gallery_rs',$result->rows );
$smarty->assign('gallery', "active");
$smarty->assign('gallery_cat', $db->query($gallery_sql)->rows);
$smarty->display('gallery.tpl');