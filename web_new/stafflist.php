<?php 
include realpath(__DIR__ . '/..')."/configs/config.php";

$smarty->assign('stafflist', "active");

$smarty->display('stafflist.tpl');