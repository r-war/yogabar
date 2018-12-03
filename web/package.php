<?php 
session_start();
include realpath(__DIR__ . '/..')."/configs/config.php";
require_once(realpath(__DIR__ . '/..')."/configs/db/Db.class.php");
$db = new Db();
$ChkLogin=0;
 if(isset($_SESSION) && isset($_SESSION['UID']))
{

if($_SESSION['UID']!=""){
$userId=$_SESSION['UID'];

$chk_cardTk=$db->query("SELECT count(tk_id) AS TkCnt FROM user_card_token WHERE user_id= :user_id",array("user_id"=>"$userId"));
 $ChkLogin=1;
  if($chk_cardTk[0]['TkCnt']>0)
  {

    
  }
  else
  {
    header("Location: card_dt_add.php");
	die();
    
  }




}
}   

 

/* $getAllSubunSubList11=$db->query("select b.pak_Intervel_id,if(b.pay_id is null  ,:A1,:A2) as paidVal,b.pay_id,a.id,a.name,a.price,a.group_type_id,a.stripe_plan_id,a.pak_Intervel_id,a.pak_total_month FROM packages a LEFT JOIN  user_pay_pack_subscribe b on a.id=b.plan_id and b.user_id=:user_id AND b.res_paid=:res_paid AND NOT b.res_id  =:res_id AND b.res_result=:res_result  AND b.un_subscrib=:un_subscrib  WHERE NOT a.stripe_plan_id =:stripe_plan_id AND a.price > :price AND a.active=:aactive order by a.group_type_id,a.id",array("A1"=>"0","A2"=>"1","user_id"=>"$userId","res_paid"=>"1","res_id"=>"","res_result"=>"succeeded","un_subscrib"=>"0","stripe_plan_id"=>"","price"=>"0","aactive"=>"1"));
*/
$getAllSubunSubList=$db->query("SELECT  id,name,stripe_plan_id,price,group_type_id,active FROM packages WHERE active= :active AND NOT  stripe_plan_id =:stripe_plan_id AND  price > :price order by priority ",array("active"=>"1","stripe_plan_id"=>"","price"=>"0"));

$Card_dt=$db->query("SELECT tk_id,user_id,card_no,customer_stripe_id,created_at,token_key,if(card_no='','',concat(:V1,card_no)) as cardDtStr FROM user_card_token WHERE user_id=:user_id ",array("V1"=>"XXXXXXXXXXXX",'user_id'=>"$userId"));
 
$smarty->assign('card_dt',$Card_dt);
$smarty->assign('getAllSubunSubList',$getAllSubunSubList);
$smarty->assign('ChkLogin',$ChkLogin);
$smarty->assign('package', "active");
$smarty->display('package.tpl');
