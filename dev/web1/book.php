<?php 
include realpath(__DIR__ . '/..')."/configs/config.php";

$smarty->assign('book', "active");

$smarty->display('book.tpl');