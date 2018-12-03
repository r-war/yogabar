<?php
require_once "session.php";
include realpath(__DIR__ . '/../..')."/configs/config.php";
if ($_GET['id']){	
	$sql = "DELETE FROM blog where id=".$_GET['id'];
	$db->query($sql);
}
$sql = "SELECT * FROM `blog` order by id Desc";
$result = $db->query($sql);

$smarty->assign('blog_rs',$result->rows );
$smarty->assign('blog', "active");

$smarty->display('admin/blog.tpl');
?>