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
$pakId='';
//code for without login select package id redirect to check out page after successful login
if(isset($_SESSION['OFFPACKID'])) 
{
  if($_SESSION['OFFPACKID'] !="" &&  $_SESSION['OFFPACKID']>0 )
  {
    $pakId=$_SESSION['OFFPACKID'];
    unset($_SESSION['OFFPACKID']);   

  }
}

 if($pakId !="" && $pakId>0)
{

$getAllSubunSubList=$db->query("SELECT  id,name,stripe_plan_id,price,group_type_id,active FROM packages WHERE active= :active AND NOT  stripe_plan_id =:stripe_plan_id AND  price > :price AND id=:id order by group_type_id ",array("active"=>"1","stripe_plan_id"=>"","price"=>"0","id"=>"$pakId"));

 
          $Card_dt=$db->query("SELECT tk_id,user_id,card_no,customer_stripe_id,created_at,token_key,if(card_no='','',concat(:V1,card_no)) as cardDtStr FROM user_card_token WHERE user_id=:user_id ",array("V1"=>"XXXXXXXXXXXX",'user_id'=>"$userId"));


}
elseif(isset($_POST))
{

     if(isset($_POST['hidid']) )
      {
        
        if( ($_POST['hidid'] !="" && $_POST['hidid']>0)    )
        {
             $pakId=$_POST['hidid'];
          $getAllSubunSubList=$db->query("SELECT  id,name,stripe_plan_id,price,group_type_id,active FROM packages WHERE active= :active AND NOT  stripe_plan_id =:stripe_plan_id AND  price > :price AND id=:id order by group_type_id ",array("active"=>"1","stripe_plan_id"=>"","price"=>"0","id"=>"$pakId"));

 
          $Card_dt=$db->query("SELECT tk_id,user_id,card_no,customer_stripe_id,created_at,token_key,if(card_no='','',concat(:V1,card_no)) as cardDtStr FROM user_card_token WHERE user_id=:user_id ",array("V1"=>"XXXXXXXXXXXX",'user_id'=>"$userId"));

 
 

        }
        else
         {

         header("Location: package.php");
	die();
          }     
      }
      else
       {
          header("Location: package.php");
	die();
 
       }
      

}
else
{

 header("Location: package.php");
	die();
} 
 
 
/*
 
$getAllSubunSubList=$db->query("SELECT  id,name,stripe_plan_id,price,group_type_id,active FROM packages WHERE active= :active AND NOT  stripe_plan_id =:stripe_plan_id AND  price > :price order by group_type_id ",array("active"=>"1","stripe_plan_id"=>"","price"=>"0"));

$Card_dt=$db->query("SELECT tk_id,user_id,card_no,customer_stripe_id,created_at,token_key,if(card_no='','',concat(:V1,card_no)) as cardDtStr FROM user_card_token WHERE user_id=:user_id ",array("V1"=>"XXXXXXXXXXXX",'user_id'=>"$userId"));
 
$smarty->assign('card_dt',$Card_dt);
$smarty->assign('getAllSubunSubList',$getAllSubunSubList);
$smarty->assign('ChkLogin',$ChkLogin);*/

$smarty->assign('card_dt',$Card_dt);
 
$smarty->assign('getAllSubunSubList',$getAllSubunSubList);
 $smarty->assign('package', "active");
$smarty->display('package_checkout.tpl'); 
