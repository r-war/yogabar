<?php 

include realpath(__DIR__ . '/..')."/configs/config.php";

$smarty->assign('home', "active");
$smarty->display('index.tpl');