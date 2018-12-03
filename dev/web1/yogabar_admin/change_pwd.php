<?php
require_once "session.php";
include realpath(__DIR__ . '/../..')."/configs/config.php";

if ($_POST){
	$title = $_POST["title"];	
	if(trim($title) != '')
 	{ 		
 		$sql = "update user SET password= sha1('".addslashes($title)."11f3b6238544a8bb51b3e02357c1af1cae0a5deb'), updated_at=now() where username='administrator';";
 		$db->query($sql);
	 	$msg = "New Password changed Successfully.";
	} 
 	else {
 		$msg = "The password filed is empty.";
 	}
	$smarty->assign('change_pwd_msg', $msg);//"The image was successfully uploaded");
}
$smarty->assign('change_pwd', "active");
$smarty->display('admin/change_pwd.tpl');
?>