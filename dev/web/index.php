<?php 

include realpath(__DIR__ . '/..')."/configs/config.php";
require_once(realpath(__DIR__ . '/..')."/configs/db/Db.class.php");
$db = new Db();

$getFrontBann=$db->query("SELECT ban_id,ban_title,img_path,bann_desc,btn_link FROM img_banner WHERE active= :active ORDER BY ban_id DESC",array("active"=>"1"));
//echo "<pre>";print_r($getFrontBann);
$smarty->assign('getFrontBann', $getFrontBann);
$smarty->assign('home', "active");
$smarty->display('index.tpl');

