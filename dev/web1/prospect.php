<?php 
include realpath(__DIR__ . '/..')."/configs/config.php";

$smarty->assign('prospect', "active");

$smarty->display('prospect.tpl');