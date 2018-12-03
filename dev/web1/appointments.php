<?php 
include realpath(__DIR__ . '/..')."/configs/config.php";

$smarty->assign('appointments', "active");

$smarty->display('appointments.tpl');