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
 

$curSessionId=md5(session_id().time());
include realpath(__DIR__ . '/..')."/configs/config.php";
require_once(realpath(__DIR__ . '/..')."/configs/phpmailer/class.phpmailer.php");
require realpath(__DIR__ . '/..')."/configs/phpmailer/PHPMailerAutoload.php";
require_once(realpath(__DIR__ . '/..')."/configs/db/Db.class.php");

 
/** if (isset($_POST['frmSubmit'])  && $_POST['frmSubmit']=='Submit') { 

 
	$smarty->assign('contact_post', " ");
	$userEmail=trim($_POST['email']);
	$userName=trim($_POST['name']);
	$passW=trim($_POST['pass']);
	$error=0;
        if($userName=="")
        {
         $smarty->assign('contact_post', "");
  	 $smarty->assign('contact_post_err', "User name field are empty");
         $error=0;
        }
        else{
              if(preg_match("/^[a-zA-Z -]+$/", $userName))
	      {
		 $error=1;
	    	$smarty->assign('contact_post_err', "");
	  
	      } 
	      else
	      {  
		$smarty->assign('contact_post_err', "Name only letters");
	       	  $error=0;
	      }                

        }
        if($error==1){
	if($userEmail=="")
	{
		$smarty->assign('contact_post', "");
		$smarty->assign('contact_post_err', "E-mail field are empty");
		$error=0;
	}
	else{

	if (!filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
		$error=0;
		$smarty->assign('contact_post', "");
		$smarty->assign('contact_post_err', "Invalid email-id");
	}
      else
      {
         	$error=1;
      } 

	

 

		}

       }

if($error==1){
		if($passW==""){
			$smarty->assign('contact_post', "");
			$smarty->assign('contact_post_err', "Password field are empty");
			$error=0;
		}
		else{

			if(strlen($passW)>=6)
			{	$error=1;
			$smarty->assign('contact_post', "");
			$smarty->assign('contact_post_err', "");
			}
			else
			{
			$smarty->assign('contact_post', "");
			$smarty->assign('contact_post_err', "Password least 6 character must");
			$error=0;
			}
		}

	}
	if($error==1) {
	$db = new Db();
        
 	$ChkExist=$db->query("SELECT count(user_id) AS UCnt, user_id,user_name,password,email,session_id,mobile_no,created_at,updated_at,active,blocked FROM user_registration WHERE email=:email",array("email"=>"$userEmail",));
      
	 
$Ucnt=$ChkExist[0]['UCnt'];
$Ndt=date('Y-m-d H:i:s');
if($Ucnt==0)
{
   $MdpassW=md5($_POST['pass']);
   $ChkInsert=$db->query("INSERT INTO user_registration(user_name,email,password,session_id,created_at)
                         VALUES(:user_name,:email,:password,:session_id,:created_at)",array("user_name"=>"$userName","email"=>"$userEmail","password"=>"$MdpassW","session_id"=>"$curSessionId","created_at"=>"$Ndt"));

	$to='bala@systimanx.com';
	$from='balasrain@gmail.com';
	$from_name='Yogabar';
	$subject='Account Activation mail from Yogabar';
	$body="<table><tr><td>Dear $userName,</td></tr> <tr><td>Thank you very much for registering your profile with Yogabar </td></tr><tr><td> Click the following link to complete the Registration Process in Yogabar</td></tr>
	<tr><td><a href='http://localhost/yogabar/web/active_register.php?sid=$curSessionId'>Click here  </td> </tr> 
	</table>"; 
	smtpmailer($to, $from, $from_name, $subject, $body);
        $smarty->assign('contact_post_err', "");
	$smarty->assign('contact_post', "Thank you for registering us. please check the mail");
   	unset($_POST);

   
    
}
else
{
$smarty->assign('contact_post_err','Mail-id already exists');
$smarty->assign('contact_post', "");
}
}

} **/

if(isset($_POST["name"])){
$smarty->assign("name", $_POST["name"]);
}

if(isset($_POST["email"])){
$smarty->assign("email", $_POST["email"]);
}

$smarty->assign('Registration', "active");

$smarty->display('reg.tpl');

 
 
function smtpmailer($to, $from, $from_name, $subject, $body) { 
	global $error;
	$mail = new PHPMailer();  // create a new object
	$mail->IsSMTP(); // enable SMTP
	$mail->SMTPDebug = 0;  // debugging: 1 = errors and messages, 2 = messages only
	$mail->SMTPAuth = true;  // authentication enabled
	$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 465; 
	$mail->Username = 'balasrain@gmail.com';  
	$mail->Password = 'ragu#!#82';           
	$mail->SetFrom($from, $from_name);
	$mail->Subject = $subject;
	$mail->Body = $body;
	$mail->AddAddress($to);
	$mail->IsHTML(true);
	 
	if(!$mail->Send()) {
		$error = 'Mail error: '.$mail->ErrorInfo; 
		return false;
	} else {
		$error = 'Message sent!';
		return true;
	}
}



 
