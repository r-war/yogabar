<?php
session_start();
//$curSessionId=md5(session_id().time());
include realpath(__DIR__ . '/..')."/configs/config.php";
require_once(realpath(__DIR__ . '/..')."/configs/db/Db.class.php");



if (isset($_GET) && ($_GET['sid'] !="" )){

	$sid=$_GET['sid'];
        $db = new Db();
        $chkUser= $db->query("SELECT count(user_id) as Cnt,active FROM user_registration WHERE session_id=:session_id",array("session_id"=>"$sid"));
	 
        
	 
	if($chkUser[0]['Cnt']==1)
	{
	  if($chkUser[0]['active']==0) 
	   {

             $updateQry=$db->query("UPDATE user_registration SET active=:active WHERE session_id=:session_id",array("active"=>"1","session_id"=>"$sid"));
             // echo "<script>alert('Your account has been activated successfully, please login');location.href='login.php' </script>";
	   // exit;
   	      $smarty->assign('contact_post_err', "");
	    $smarty->assign('contact_post', "Your account has been activated successfully");

	   }
	   else
	   {

	      $smarty->assign('contact_post', "");
	      $smarty->assign('contact_post_err', "Your account already activated");
             //echo "<script>alert('Your account already activated');location.href='login.php' </script>";
	    //exit;
	   } 


	}
	else
	{
	   $smarty->assign('contact_post', "");
	   $smarty->assign('contact_post_err', "Data not found");
          //echo "<script>alert('Data not found, please try again');location.href='login.php' </script>";
	  //exit;

	}
}
else
{      //echo "<script>alert('Data not found, please try again');location.href='login.php' </script>";
	 // exit;
	 $smarty->assign('contact_post_err', "1");
}
 $smarty->assign('contact', "active");
 $smarty->display('active_reg.tpl');

 
 




 
