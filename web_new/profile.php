<?php
session_start();

include realpath(__DIR__ . '/..')."/configs/config.php";
require_once(realpath(__DIR__ . '/..')."/configs/db/Db.class.php");
$db = new Db();
 if(isset($_SESSION) && $_SESSION['UID'] !="" ) {
 $sesUID=$_SESSION['UID'];
 }
 else
 {echo "<script> location.href='login.php'; </script>"; }

 if (isset($_POST['frmSubmit']) && $_POST['frmSubmit']=='Update') { 

 
  if($_POST['uname'] !="" && $_POST['mobile'] !="" && $_POST['email'] !="")
  {
     $ValidReturn=0;
     $email=trim($_POST['email']);
     $mobile=trim($_POST['mobile']);
      
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $ValidReturn=0;
        $smarty->assign('contact_post', "");
        $smarty->assign('contact_post_err', "Invalid email-id");
      }
      else
      {
         $ValidReturn=1;
     } 

     if(is_numeric($mobile) && strlen($mobile)>=10 )
     {
       $ValidReturn=1;
     }
     else
     {   
        $smarty->assign('contact_post', "");
        $smarty->assign('contact_post_err', "Invalid mobile number");
     	$ValidReturn=0;
     } 
   
    if($ValidReturn)
    {
       $uName=trim($_POST['uname']);
       $email=trim($_POST['email']);
       $mobil=trim($_POST['mobile']);

       //$Chk_sql =$db->query("SELECT COUNT(user_id) AS Cnts FROM user_registration  WHERE  email=:email AND NOT user_id =:user_id",array("email"=>"$email","user_id"=>"$sesUID")); 
      
       
       
       
        
    if(1)
    {
       $_SESSION['UNAME']=$uName;
       $_SESSION['UEMAIL']=$email;
       $Update_sql =$db->query("UPDATE user_registration SET user_name=:user_name,mobile_no=:mobile_no  WHERE user_id=:user_id ",array("user_name"=>"$uName","mobile_no"=>"$mobil","user_id"=>"$sesUID"));
 
  	 
        $smarty->assign('contact_post', "Profile updated successfully");
        $smarty->assign('contact_post_err', "");

    }
    else
    {
      $smarty->assign('contact_post', "");
      $smarty->assign('contact_post_err', "Email-id already exists");
    }


       

    }
    else
    {


    }


    
  }
  else
  {

      $smarty->assign('contact_post', "");
      $smarty->assign('contact_post_err', "Invalid fields");

  }

}
  
 if(isset($_POST) && $_POST['frmSubmit']=='Update')
 { 
  
 
$getProfileData[0]['user_name']=trim($_POST["uname"]);
$getProfileData[0]['mobile_no']=trim($_POST["mobile"]);
$getProfileData[0]['email']=trim($_POST["email"]);
 

 }
 else{
 $getProfileData=$db->query("SELECT user_id, user_name, password, email, session_id, mobile_no, created_at, updated_at, active, blocked FROM user_registration WHERE active=:active AND blocked=:blocked AND user_id=:user_id",array("active"=>"1","blocked"=>"1","user_id"=>"$sesUID"));

 }
 $smarty->assign('userList',$getProfileData);
$smarty->assign('profile', "active");
 $smarty->display('profile.tpl');

 

 
 




 
