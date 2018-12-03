<?php
require_once "session.php";
include realpath(__DIR__ . '/../..')."/configs/config.php";

$smarty->assign('home', "active");

$smarty->display('admin/index.tpl');
?>