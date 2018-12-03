<?php
require_once "session.php";
include realpath(__DIR__ . '/../..')."/configs/config.php";

$sql = "SELECT * FROM faq where is_active=1";
$result = $db->query($sql);
$smarty->assign('faq_rs',$result->row);
$row2 = mysql_fetch_row($result);
if($result->row)
{
	$num_rows=1;
}
else
{
	$num_rows=0;
}
if ($_POST){
	$title = $_POST["title"];		
 	$description = $_POST["content"];
	$is_active = 1;
 	
	if($num_rows>0)
	{
	 	$sql = "UPDATE faq SET name='".addslashes($title)."', description='".addslashes($description)."', is_active={$is_active}, created_at=now(), updated_at=now();";
	}
	else
	{
		$sql = "INSERT INTO faq SET name='".addslashes($title)."', description='".addslashes($description)."', is_active={$is_active}, created_at=now(), updated_at=now();";
	}
 	$db->query($sql);
 	$smarty->assign('faq_add', "The FAQ updated successfully");
	redirect('faq_add.php');
}

$smarty->assign('news', "active");
$smarty->display('admin/faq_add.tpl');
?>