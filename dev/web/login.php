<?php
session_start();
 
if(isset($_SESSION) && isset($_SESSION['UID']))
{
 
if($_SESSION['UID']!=""){
	$userId=$_SESSION['UID'];
	header("Location: package.php");
	die();
}



}
  
include realpath(__DIR__ . '/..')."/configs/config.php";
require_once(realpath(__DIR__ . '/..')."/configs/db/Db.class.php");

if(isset($_GET['p']) && isset($_GET['ct']))  //code for without login select package id redirect to check out page after successful login
{
 if($_GET['p'] != "" && $_GET['ct'] !="")
 {    
 	  $_SESSION['CAT']=$_GET['ct'];
      $_SESSION['OFFPACKID']=$_GET['p'];
 }
 

}


if (isset($_POST['frmSubmit'])  && $_POST['frmSubmit']=='Submit') {

  $userName=trim($_POST['email']);
 
 $password=trim(($_POST['pass']));
$error=0;
if($userName=="")
{
  $error=0;
   $smarty->assign('contact_post', "");
   $smarty->assign('contact_post_err', "User name field are empty");

}
else
{
  $error=1;
} 
if($error==1)
{
  if($password=="")
  { $error=0;

    $smarty->assign('contact_post', "");
   $smarty->assign('contact_post_err', "Password field are empty");
  }
  else{
    $error=1;
   }
}



if($error==1)
{
        $Mdpassword=md5($_POST['pass']);
	$db = new Db();
 
        $chk_qur=$db->query("SELECT count(user_id) as Cnt,active,blocked,user_id,user_name,email FROM user_registration WHERE email=:email AND password=:password",array("email"=>"$userName","password"=>"$Mdpassword"));

 

if($chk_qur[0]['Cnt']==1)
{

  if($chk_qur[0]['active']==1 && $chk_qur[0]['blocked']==1 )
  {
    $uName=$chk_qur[0]['user_name'];
    $uId=$chk_qur[0]['user_id'];
    $email=$chk_qur[0]['email'];
    $_SESSION['UID']=$uId;
    $_SESSION['UNAME']=ucfirst($uName);
    $_SESSION['UEMAIL']=$email;
    $curSessionId=md5(session_id().time().$uId);
    $_SESSION['USESSION']=$curSessionId;
	     
     $updateQry=$db->query("UPDATE user_registration SET session_id=:session_id WHERE user_id=:user_id",array("session_id"=>"$curSessionId","user_id"=>"$uId"));

    $chk_cardTk=$db->query("SELECT count(tk_id) AS TkCnt FROM user_card_token WHERE user_id= :user_id",array("user_id"=>"$uId"));

  if($chk_cardTk[0]['TkCnt']>0)
  {
  	if(isset($_GET['p']) && isset($_GET['ct']))
  	{
  		if($_GET['p'] !="" && $_GET['ct'] !="")
         {
             if($_GET['ct']=='pk')
             {
                echo "<script>location.href='package_checkout.php' ;</script>";
             }
             elseif($_GET['ct']=='ev') 
             {
                  echo "<script>location.href='events_checkout.php' ;</script>";
             } 
             else
             {
             	echo "<script>location.href='package_checkout.php' ;</script>";
             } 
         }
         else
         {
         	echo "<script>location.href='package_checkout.php' ;</script>";
         }
  	}
  	else
  	{
  	    echo "<script>location.href='package_checkout.php' ;</script>";	
  	}
  
   //echo "<script>location.href='package.php' ;</script>";
  }
  else
  {
    echo "<script>location.href='card_dt_add.php' ;</script>";
  }
//echo "<pre>";print_r($chk_cardTk);
//exit;

    
    
 
  }
  else
  {
    if($chk_qur[0]['active']==0)
      {
        $smarty->assign('contact_post', "");
	$smarty->assign('contact_post_err', "Account not activated");
      }
      elseif($chk_qur[0]['blocked']==0)
      {
        $smarty->assign('contact_post', "");
	$smarty->assign('contact_post_err', "Account has been blocked");    
      }
  }


}
else
{
	$smarty->assign('contact_post', "");
	$smarty->assign('contact_post_err', "Invalid username/password");

}
 
}

 


}
if(isset($_POST["email"])){
$smarty->assign("Loginemail", $_POST["email"]);
}

 $smarty->assign('login', "active");
 $smarty->display('login.tpl');

 
 




 
