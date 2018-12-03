<?php 
	session_start();
	if(isset($_SESSION))
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
$db = new Db();

/*$getAllSubunSubList=$db->query("select  c.name,c.price,a.subcr_id,a.deleted,a.pack_id,if(a.deleted=0,:D1,:D2) AS subunsub,b.card_no,b.card_holder_name,b.cv_no,b.user_id,b.exp_yr,exp_month,if(card_no='','',concat(card_holder_name,'[',SUBSTRING(card_no,:V1,:V2),:V3,']' ) ) as cardDtStr FROM user_pack_subscribe a,user_card_details b,packages c WHERE a.user_id=:user_id AND a.card_id=b.c_id AND a.pack_id=c.id ORDER BY a.deleted DESC ",array("D1"=>"Subscribe","D2"=>"UnSubscribe","V1"=>"1","V2"=>"4","V3"=>"XXXX","user_id"=>"$userId"));*/

// select  (CASE WHEN a.res_subcri_result='active' AND a.res_subcri_id !="" THEN 1 ELSE 0 end) as subcriSucc,(CASE WHEN a.res_paid=1 AND res_result='succeeded' AND a.res_id!="" THEN 1 ELSE 0 END ) as Paysucc,b.name,b.price, a.pay_id,token_id,plan_id,res_paid,res_id,res_result,res_subcri_result,res_subcri_id,a.un_subscrib,a.created_at FROM user_pay_pack_subscribe a,packages b WHERE a.user_id=1 AND a.plan_id=b.id

/*$getAllSubunSubList=$db->query("SELECT  (CASE WHEN a.res_subcri_result=:res_subcri_result AND NOT a.res_subcri_id =:res_subcri_id THEN :S1 ELSE :S2 END) as subcriSucc,a.pak_Intervel_id,(CASE WHEN a.res_paid=:res_paid AND a.res_result=:res_result AND NOT  a.res_id=:res_id THEN :P1 ELSE :P2 END ) as Paysucc,b.name,b.price, a.pay_id,token_id,plan_id,res_paid,res_id,res_result,res_subcri_result,res_subcri_id,a.un_subscrib,a.created_at FROM user_pay_pack_subscribe a,packages b WHERE a.user_id=:user_id AND a.plan_id=b.id AND a.res_paid=:res_paid1 AND a.res_result=:res_result1 AND NOT  a.res_id=:res_id1 ",array("res_subcri_result"=>"active","res_subcri_id"=>"","S1"=>"1","S2"=>"0","res_paid"=>"1","res_result"=>"succeeded","res_id"=>"","P1"=>"1","P2"=>"0","user_id"=>"$userId","res_paid1"=>"1","res_result1"=>"succeeded","res_id1"=>"")); */


 $getAllSubunSubList=$db->query("SELECT  (CASE WHEN a.res_subcri_result=:res_subcri_result AND NOT a.res_subcri_id =:res_subcri_id THEN :S1 ELSE :S2 END) as subcriSucc,a.pak_Intervel_id,(CASE WHEN a.res_paid=:res_paid AND a.res_result=:res_result AND NOT  a.res_id=:res_id THEN :P1 ELSE :P2 END ) as Paysucc, plan_name as name,plan_price as price,price as disPrice, a.pay_id,token_id,plan_id,res_paid,res_id,res_result,res_subcri_result,res_subcri_id,a.un_subscrib,a.created_at,a.discount_applied FROM user_pay_pack_subscribe a  WHERE a.user_id=:user_id AND a.res_paid=:res_paid1 AND a.res_result=:res_result1 AND NOT  a.res_id=:res_id1 ",array("res_subcri_result"=>"active","res_subcri_id"=>"","S1"=>"1","S2"=>"0","res_paid"=>"1","res_result"=>"succeeded","res_id"=>"","P1"=>"1","P2"=>"0","user_id"=>"$userId","res_paid1"=>"1","res_result1"=>"succeeded","res_id1"=>""));


$smarty->assign('getAllSubunSubList',$getAllSubunSubList);
$smarty->assign('profile', "active");
$smarty->display('user_pack.tpl');


