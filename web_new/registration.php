<?php 
include realpath(__DIR__ . '/..')."/configs/config.php";

$smarty->assign('registration', "active");

 $smarty->display('registration.tpl');
