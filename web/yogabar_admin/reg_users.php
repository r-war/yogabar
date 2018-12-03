<?php
require_once "session.php";
include realpath(__DIR__ . '/../..')."/configs/config.php";
if (isset($_GET['id']) && isset($_GET['fld']) && $_GET['id'] !="" && $_GET['fld'] !="" ){

$usrId=$_GET['id'];
$bloId=$_GET['fld'];
$sql = "UPDATE user_registration SET blocked=$bloId WHERE user_id=$usrId";
$db->query($sql);
 echo "<script>alert('Successfully updated'); location.href='reg_users.php'; </script>";
}
$sql = "SELECT  user_id, user_name, password, email, session_id, package_id, mobile_no, card_details, created_at, updated_at, active, blocked,if(blocked=1, concat('?id=',user_id,'&fld=0'),concat('?id=',user_id,'&fld=1'))  as blkArg,if(card_details='','---------',concat(SUBSTRING(card_details,1,5),'XXXXXXXXXXX' ) ) as cardDtStr FROM user_registration order by user_id Desc";
$result = $db->query($sql);

$smarty->assign('user_list',$result->rows );
$smarty->assign('users', "active");

$smarty->display('admin/reg_users.tpl');

 

?>
