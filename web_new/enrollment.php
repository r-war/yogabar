<?php 
include realpath(__DIR__ . '/..')."/configs/config.php";

$smarty->assign('enrollment', "active");

$smarty->display('enrollment.tpl');