<?php 
include realpath(__DIR__ . '/..')."/configs/config.php";

require (INCLUDES.'smarty/libs/SmartyPaginate.class.php');
SmartyPaginate::connect();
SmartyPaginate::setLimit(2);
SmartyPaginate::setUrl('teacher.php');

/*$sql =  sprintf("SELECT * FROM teacher where is_active=1 order by id desc LIMIT %d,%d", SmartyPaginate::getCurrentIndex(), SmartyPaginate::getLimit());*/

$sql =  sprintf("SELECT * FROM teacher where is_active=1 order by id desc", SmartyPaginate::getCurrentIndex(), SmartyPaginate::getLimit());
$result = $db->query($sql);

if($_GET['id'])
{
$id = $_GET['id'];
$sql = "SELECT * FROM teacher where is_active=1 and id=".$id ;
/*if (!($id >0))
	redirect("teacher.php");*/
}
else
{
	$sql = "SELECT * FROM teacher where is_active=1 limit 1";
}

$total_rs = $db->query($sql);

SmartyPaginate::setTotal($total_rs->num_rows);

$smarty->assign('teacher_rs',$result->rows );
$smarty->assign('teacher1_rs',$total_rs->rows );
$smarty->assign('news', "active");

SmartyPaginate::assign($smarty);
$smarty->display('teacher.tpl');

