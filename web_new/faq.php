<?php 
include realpath(__DIR__ . '/..')."/configs/config.php";
require (INCLUDES.'smarty/libs/SmartyPaginate.class.php');
$sql = "SELECT * FROM faq where is_active=1 ;";
$result = $db->query($sql);
$smarty->assign('faq_rs',$result->row);
$smarty->assign('faq', "active");
$smarty->display('faq.tpl');