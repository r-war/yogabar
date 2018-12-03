<?php
session_start();
	if(isset($_SESSION) && isset($_SESSION['UID']))
	{

	if($_SESSION['UID']!=""){
	$userId=$_SESSION['UID'];

	}
	else
	{
	header("Location: login.php");
	die();

	}


	}
	else{

	header("Location: login.php");

	}
 
  
include realpath(__DIR__ . '/..')."/configs/config.php";
require_once(realpath(__DIR__ . '/..')."/configs/db/Db.class.php");


if (isset($_POST['frmSubmit']) && $_POST['frmSubmit']=='Submit' ) {
      
	$oldpwd=trim($_POST['oldpwd']);
	$newPwd=trim($_POST['newpass']);


	$userId=$_SESSION['UID'];
        $error=0;
	if($oldpwd == "" || $newPwd ==""  )
	{
	   $smarty->assign('contact_post', "");
	   $smarty->assign('contact_post_err', "Required fields are not empty");
           $error=0;
	}
        else
        {
		$error=1;
        }

 
        if($error==1)
        {   
        if(strlen($newPwd)>=6)
        {	$error=1;
            	$smarty->assign('contact_post', "");
	   	$smarty->assign('contact_post_err', "");
        }
        else
        {
	   	   $smarty->assign('contact_post', "");
		   $smarty->assign('contact_post_err', "New password least 6 character must");
          	   $error=0;
         }
        }
        if($error==1)
        { $db = new Db();
        $oldPwd=md5($_POST['oldpwd']);
        $newPwd=md5($_POST['newpass']);
	$sqlChk=$db->query("SELECT count(user_id) as Cnt,active,blocked,user_id,user_name,email FROM user_registration WHERE password=:password AND user_id=:user_id",array("password"=>"$oldPwd","user_id"=>"$userId"));
	 
	     
	if($sqlChk[0]['Cnt']==1 && $sqlChk[0]['blocked']==1 )
	{

	    $updateQry=$db->query("UPDATE user_registration SET password=:password WHERE user_id=:user_id",array("password"=>"$newPwd","user_id"=>"$userId"));
	    
	    $smarty->assign('contact_post_err', "");
	    $smarty->assign('contact_post', "Your password has been changed successfully");

	}
	else
	{     
               if($sqlChk[0]['blocked']==0)
                {
                   	$smarty->assign('contact_post', "");
			$smarty->assign('contact_post_err', "Invalid old password");
                }
                else
                {
                  echo "<script>location.href='logout.php';</script>";
                }
		

	}

 }
}

 $smarty->assign('profile', "active");
 $smarty->display('change_pwd.tpl');

 
 




 
