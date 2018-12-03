<?php 
include realpath(__DIR__ . '/..')."/configs/config.php";

$smarty->assign('booking', "active");

$smarty->display('booking.tpl');