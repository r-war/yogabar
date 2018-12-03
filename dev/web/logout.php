<?php
session_start();
session_destroy();

include realpath(__DIR__ . '/..')."/configs/config.php";

echo "<script>location.href='login.php' ;</script>";

 $smarty->assign('contact', "active");
 $smarty->display('login.tpl');

 
 




 
