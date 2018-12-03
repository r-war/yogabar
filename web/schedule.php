<?php 
include realpath(__DIR__ . '/..')."/configs/config.php";

$smarty->assign('schedule', "active");

$smarty->display('schedule.tpl');