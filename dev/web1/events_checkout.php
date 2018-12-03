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
$chk_cardTk= $db->query("SELECT count(tk_id) AS TkCnt FROM user_card_token WHERE user_id= :user_id",array('user_id'=>"$userId"));  
 
 

 
  $ChkLogin=1;
  if($chk_cardTk[0]['TkCnt'] >0)
  {

      
  }
  else
  {
     header("Location: card_dt_add.php");
 	die();
    
  }

 


}
}

if(isset($_POST))
{

     if(isset($_POST['hidid']) )
      {
        
        if( ($_POST['hidid'] !="" && $_POST['hidid']>0)    )
        { 

          $eventId=$_POST['hidid'];
   
        $getEvent=$db->query(" select count(id) as CntId ,id,name,description,is_active,price,events_name,event_date,created_at,updated_at from events where id= :id and  is_active= :is_active",array("id"=>"$eventId","is_active"=>"1"));

   if($getEvent[0]['CntId']==1)
   {
 
         $Card_dt=$db->query("SELECT tk_id,user_id,card_no,customer_stripe_id,created_at,token_key,if(card_no='','',concat(:V1,card_no)) as cardDtStr FROM user_card_token WHERE user_id=:user_id ",array("V1"=>"XXXXXXXXXXXX",'user_id'=>"$userId"));
       
   }
   else
   {
      header("Location: notes.php");
 	   die();

   } 

  

           

        }
        else
        {

            header("Location: notes.php");
 	   die();

         }
      }
      else{

          header("Location: notes.php");
 	die();

        }
}
else
{

  header("Location: notes.php");
 	die();

}




 $smarty->assign('getEvent',$getEvent);
$smarty->assign('card_dt',$Card_dt);
$smarty->assign('package', "active");
$smarty->display('events_checkout.tpl');  



//code for without login select package id redirect to check out page after successful login
/*if(isset($_SESSION['OFFPACKID'])) 
{
  if($_SESSION['OFFPACKID'] !="" &&  $_SESSION['OFFPACKID']>0 )
  {
    $pakId=$_SESSION['OFFPACKID'];
    unset($_SESSION['OFFPACKID']);   

  }
}
*/
/*

 if(0)
{

 
}
elseif(isset($_POST))
{

     if(isset($_POST['hidid']) )
      {
        
        if( ($_POST['hidid'] !="" && $_POST['hidid']>0)    )
        {
             echo $pakId=$_POST['hidid'];
          /*$getAllSubunSubList=$db->query("SELECT  id,name,stripe_plan_id,price,group_type_id,active,if(pak_Intervel_id =:intid,:p1,:p2) as pak_Intervel_id FROM packages WHERE active= :active AND NOT  stripe_plan_id =:stripe_plan_id AND  price > :price AND id=:id order by group_type_id ",array("active"=>"1","stripe_plan_id"=>"","price"=>"0","id"=>"$pakId","intid"=>"1","p1"=>"Subscribe","p2"=>"Pay"));

 
          $Card_dt=$db->query("SELECT tk_id,user_id,card_no,customer_stripe_id,created_at,token_key,if(card_no='','',concat(:V1,card_no)) as cardDtStr FROM user_card_token WHERE user_id=:user_id ",array("V1"=>"XXXXXXXXXXXX",'user_id'=>"$userId"));

   */
 

   /*     }
        else
         {

         header("Location: notes.php");
	die();
          }     
      }
      else
       {
          header("Location: notes.php");
	die();
  $smarty->assign('events_rs',$result->rows );

 $smarty->assign('news', "active");
 $smarty->assign('ChkLogin', "$ChkLogin");


 $smarty->display('notes.tpl');
       }
      

}
else
{

 header("Location: notes.php");
	die();
} 
 
 
/*
 
$getAllSubunSubList=$db->query("SELECT  id,name,stripe_plan_id,price,group_type_id,active FROM packages WHERE active= :active AND NOT  stripe_plan_id =:stripe_plan_id AND  price > :price order by group_type_id ",array("active"=>"1","stripe_plan_id"=>"","price"=>"0"));

$Card_dt=$db->query("SELECT tk_id,user_id,card_no,customer_stripe_id,created_at,token_key,if(card_no='','',concat(:V1,card_no)) as cardDtStr FROM user_card_token WHERE user_id=:user_id ",array("V1"=>"XXXXXXXXXXXX",'user_id'=>"$userId"));
 
$smarty->assign('card_dt',$Card_dt);
$smarty->assign('getAllSubunSubList',$getAllSubunSubList);
$smarty->assign('ChkLogin',$ChkLogin);*/

//$smarty->assign('card_dt',$Card_dt);
 
//$smarty->assign('getAllSubunSubList',$getAllSubunSubList);
 //$smarty->assign('package', "active");
//$smarty->display('package_checkout.tpl'); l[0]['TkCnt']
