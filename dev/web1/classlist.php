<?php 
include realpath(__DIR__ . '/..')."/configs/config.php";

$smarty->assign('classlist', "active");

$smarty->display('classlist.tpl');