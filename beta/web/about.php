<?php 
include realpath(__DIR__ . '/..')."/configs/config.php";

$smarty->assign('about', "active");

$smarty->display('about.tpl');