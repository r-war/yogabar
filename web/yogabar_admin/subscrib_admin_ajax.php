<?php
session_start();
require_once(realpath(__DIR__ . '/../..')."/configs/db/Db.class.php");
require_once(realpath(__DIR__ . '/../..')."/configs/vendor/autoload.php");
$db = new Db();
$mode=$_POST['mode'];
$result['error']=0;
	if(isset($_SESSION)) {
		 
	}
	else
	{
		echo 0;
		exit;
	}

if($mode=='delsub')
{
     $subcr_id=trim($_POST['ids']);

    $chkValidUser=$db->query("SELECT COUNT(pay_id) AS paidCnt,res_paid,res_id,res_result,res_subcri_result,res_subcri_id,un_subscrib,(CASE WHEN  res_subcri_result=:res_subcri_result AND NOT  res_subcri_id =:res_subcri_id THEN :S1 ELSE :S2 END) as subcriSucc,(CASE WHEN res_paid=:res_paid AND res_result=:res_result AND NOT  res_id=:res_id THEN :P1 ELSE :P2 END ) as Paysucc  FROM user_pay_pack_subscribe WHERE pay_id=:pay_id ",array("pay_id"=>"$subcr_id","res_subcri_result"=>"","res_subcri_id"=>"","S1"=>"1","S2"=>"0","res_paid"=>"1","res_result"=>"succeeded","res_id"=>"","P1"=>"1","P2"=>"0"));

 
if($chkValidUser[0]['paidCnt']>0)
{
  if($chkValidUser[0]['un_subscrib']==0)
   {
   
     if($chkValidUser[0]['Paysucc']==1)
     {
         $res_subcri_id=$chkValidUser[0]['res_subcri_id'];
        $chkkey=$db->query("SELECT s_key,p_key FROM packages_key");
	$keyVals=$chkkey[0]['s_key'];
	\Stripe\Stripe::setApiKey($keyVals); 
	try
	{

            $subscription = \Stripe\Subscription::retrieve("$res_subcri_id");
            $CanclRes=$subscription->cancel();
 
            $canceledSt=$CanclRes->status;
            $canceledAt=$CanclRes->canceled_at;
            if($canceledSt=="canceled" && $canceledAt!="" )
             {
               $getDt=$db->query("SELECT  from_unixtime('$canceledAt', '%Y-%m-%d %h:%i:%s') as a ");
               $canDt=$getDt[0]['a'];
                $UpdateDt=$db->query("UPDATE user_pay_pack_subscribe SET un_subscrib=:un_subscrib,un_subscrib_dt=:un_subscrib_dt,un_res_subscrib_status=:un_res_subscrib_status,un_subscrib_by=:un_subscrib_by WHERE pay_id=:pay_id",array("un_subscrib"=>"1","un_subscrib_dt"=>"$canDt","un_res_subscrib_status"=>"$canceledSt","pay_id"=>"$subcr_id","un_subscrib_by"=>"Admin"));
 
           echo "2#$#Plan has been Unsubscribed successfully";
              exit;
                 

             } 
 
 

 
	} 
	catch(Exception $k)
	{

		echo "2#$#".$k->getMessage();
		exit();

	}

       


     }
     else
     {
        echo "1#$#Payment failure";
        exit;

     }
 
   }
   else{

       echo "2#$#Data already unsubscribed";
       exit;

      }
  
 

}
else
{
  echo "1#$#Data mismatch";
  exit;

}

//print_r($chkValidUser);


  //  $chkVal=$db->query("SELECT COUNT(subcr_id) as SCnt,subcr_id,deleted FROM user_pack_subscribe WHERE subcr_id=:subcr_id AND user_id=:user_id",array("subcr_id"=>"$subcr_id","user_id"=>"$sesUID"));
/*
 
  if($chkVal[0]['SCnt']>0)
{
   
   
  if($chkVal[0]['deleted']==1)
  {
    $UpdateDelVal=0;
    $returnVal="2#$#".$subcr_id;
    $chkValUpdate=$db->query("UPDATE user_pack_subscribe SET deleted=:deleted WHERE subcr_id=:subcr_id AND user_id=:user_id",array("deleted"=>"$UpdateDelVal","subcr_id"=>"$subcr_id","user_id"=>"$sesUID"));
  echo $returnVal;
   exit;
 
  }
  else
  {


   echo 1;
   exit;
  }
  
   
  
  
}
else
{
   echo 1;
   exit;

}

*/
 
 


}
elseif($mode=='misssub')
{
$id=trim($_POST['ids']) ;


$getAllSubunSubList=$db->query("SELECT count(a.pay_id) as payCnt,c.customer_stripe_id,b.stripe_plan_id,a.res_id,(CASE WHEN a.res_subcri_result=:res_subcri_result AND NOT a.res_subcri_id =:res_subcri_id THEN :S1 ELSE :S2 END) as subcriSucc,(CASE WHEN a.res_paid=:res_paid AND a.res_result=:res_result AND NOT  a.res_id=:res_id THEN :P1 ELSE :P2 END ) as Paysucc FROM user_pay_pack_subscribe a,packages b,user_card_token c WHERE pay_id=:pay_id AND a.plan_id=b.id AND c.tk_id=a.token_id",array("res_subcri_result"=>"active","res_subcri_id"=>"",
"S1"=>"1","S2"=>"0","res_paid"=>"1","res_result"=>"succeeded","res_id"=>"","P1"=>"1","P2"=>"0",
"pay_id"=>"$id"));
//echo "2#$#Subscription active successfully"; exit;
  //print_r($getAllSubunSubList); exit;
if($getAllSubunSubList[0]['payCnt']==1)
{
   if($getAllSubunSubList[0]['Paysucc']==1 && $getAllSubunSubList[0]['subcriSucc']==0)
   {
         $chkkey=$db->query("SELECT s_key,p_key FROM packages_key");
		$keyVals=$chkkey[0]['s_key'];
		\Stripe\Stripe::setApiKey($keyVals);  /** Create a Payment start **/
	try{
                $customer_stripe_id=$getAllSubunSubList[0]['customer_stripe_id'];
                $stripe_plan_id=$getAllSubunSubList[0]['stripe_plan_id'];

		$customer_Subscription = \Stripe\Subscription::create(array(
		"customer" => "$customer_stripe_id",
		"plan" => "$stripe_plan_id",));
		if($customer_Subscription->status=='active' && $customer_Subscription->id !="" )
		{
		$ResSub_id=$customer_Subscription->id;
		$avtiv=$customer_Subscription->status;
		$updateSubscri=$db->query("UPDATE user_pay_pack_subscribe SET res_subcri_result=:res_subcri_result ,res_subcri_id=:res_subcri_id,faild_attempt_subscrib=:faild_attempt_subscrib WHERE pay_id=:pay_id",array("res_subcri_result"=>"$avtiv","res_subcri_id"=>"$ResSub_id","faild_attempt_subscrib"=>"1","pay_id"=>"$id"));

		echo "2#$#Subscription active successfully";
		exit();



		} 
		else
		{

		echo "1#$#Faild on package subscription";
		exit();

		}

	}catch(Exception $k)
	{

	echo "1#$#".$k->getMessage();
	exit();

	}


   
      
   }
   else
   {
     echo "1#$#Please try again";
     exit;

   }
}
else{

echo "1#$#No data found"; 
exit;

}


}

 




 
 ?>




 
