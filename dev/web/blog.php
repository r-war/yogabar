<?php 
include realpath(__DIR__ . '/..')."/configs/config.php";

require (INCLUDES.'smarty/libs/SmartyPaginate.class.php');
SmartyPaginate::connect();
SmartyPaginate::setLimit(2);
SmartyPaginate::setUrl('blog.php');

$sql =  sprintf("SELECT * FROM blog where is_active=1 order by id desc LIMIT %d,%d", SmartyPaginate::getCurrentIndex(), SmartyPaginate::getLimit());
$result = $db->query($sql);

$sql = "SELECT * FROM blog where is_active=1";
$total_rs = $db->query($sql);

SmartyPaginate::setTotal($total_rs->num_rows);

$smarty->assign('blog_rs',$result->rows );
$smarty->assign('news', "active");

SmartyPaginate::assign($smarty);
$smarty->display('blog.tpl');