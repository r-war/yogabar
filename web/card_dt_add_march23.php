<?php
session_start();

include realpath(__DIR__ . '/..')."/configs/config.php";

 if(isset($_SESSION) && $_SESSION['UID'] !="" ) {
 $sesUID=$_SESSION['UID'];	

  
}
 else
 {echo "<script> location.href='login.php'; </script>"; }

 

 $smarty->assign('profile', "active");
 $smarty->display('card_dt_add.tpl');
 


 

 

 
 




 
