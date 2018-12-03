<?php 
include realpath(__DIR__ . '/..')."/configs/config.php";
$id = $_GET['id'];
if (!($id >0))
	redirect("blog.php");

$sql = "SELECT * FROM `blog` where is_active=1 and id=".$id;
$result = $db->query($sql);
if (!($result->num_rows > 0))
	redirect("blog.php");

$smarty->assign('blog_rs',$result->row );

$smarty->assign('news', "active");

$smarty->display('blog_detail.tpl');