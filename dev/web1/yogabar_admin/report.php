<?php
require_once "session.php";
include realpath(__DIR__ . '/../..')."/configs/config.php";
require_once(realpath(__DIR__ . '/../..')."/configs/db/Db.class.php");
$db = new Db();

if ($_POST['frmDt']){

$getAllSubunSubList=$db->query("SELECT  (CASE WHEN a.res_subcri_result=:res_subcri_result AND NOT a.res_subcri_id =:res_subcri_id THEN :S1 ELSE :S2 END) as subcriSucc,a.pak_Intervel_id,(CASE WHEN a.res_paid=:res_paid AND a.res_result=:res_result AND NOT  a.res_id=:res_id THEN :P1 ELSE :P2 END ) as Paysucc,b.name,b.price, a.pay_id,token_id,plan_id,res_paid,res_id,res_result,res_subcri_result,res_subcri_id,a.un_subscrib,date_format(a.created_at,'%d-%b-%Y') as created_at,c.user_name,c.email FROM user_pay_pack_subscribe a,packages b,user_registration c WHERE a.user_id=c.user_id AND a.plan_id=b.id AND a.res_paid=:res_paid1 AND a.res_result=:res_result1 AND NOT  a.res_id=:res_id1 ",array("res_subcri_result"=>"active","res_subcri_id"=>"","S1"=>"1"
,"S2"=>"0","res_paid"=>"1","res_result"=>"succeeded","res_id"=>"","P1"=>"1","P2"=>"0","res_paid1"=>"1","res_result1"=>"succeeded","res_id1"=>""));
echo count($getAllSubunSubList);
 echo "<pre>";print_r($getAllSubunSubList);	


//$smarty->assign('getAllSubunSubList',$getAllSubunSubList);
//$smarty->assign('package', "active");

//$smarty->display('admin/pack_unsub.tpl');	 
}
 


/*$getAllSubunSubList=$db->query("SELECT  (CASE WHEN a.res_subcri_result=:res_subcri_result AND NOT a.res_subcri_id =:res_subcri_id THEN :S1 ELSE :S2 END) as subcriSucc,a.pak_Intervel_id,(CASE WHEN a.res_paid=:res_paid AND a.res_result=:res_result AND NOT  a.res_id=:res_id THEN :P1 ELSE :P2 END ) as Paysucc,b.name,b.price, a.pay_id,token_id,plan_id,res_paid,res_id,res_result,res_subcri_result,res_subcri_id,a.un_subscrib,date_format(a.created_at,'%d-%b-%Y') as created_at,c.user_name,c.email FROM user_pay_pack_subscribe a,packages b,user_registration c WHERE a.user_id=c.user_id AND a.plan_id=b.id AND a.res_paid=:res_paid1 AND a.res_result=:res_result1 AND NOT  a.res_id=:res_id1 ",array("res_subcri_result"=>"active","res_subcri_id"=>"","S1"=>"1"
,"S2"=>"0","res_paid"=>"1","res_result"=>"succeeded","res_id"=>"","P1"=>"1","P2"=>"0","res_paid1"=>"1","res_result1"=>"succeeded","res_id1"=>""));
//echo "<pre>";print_r($getAllSubunSubList);

//$smarty->assign('package_rs',$result->rows );
//$smarty->assign('getAllSubunSubList',$getAllSubunSubList);
//$smarty->assign('package', "active");
*/
$smarty->display('admin/report.tpl');
?>
