<?php
session_start();

require_once(realpath(__DIR__ . '/..')."/configs/vendor/autoload.php");
include realpath(__DIR__ . '/..')."/configs/config.php";
require_once(realpath(__DIR__ . '/..')."/configs/db/Db.class.php");
$db = new Db();

 if(isset($_SESSION) && $_SESSION['UID'] !="" ) {
 $sesUID=$_SESSION['UID'];
 $user_Mail=$_SESSION['UEMAIL'];	

  
}
 else
 {echo "<script> location.href='login.php'; </script>"; }

if(isset($_POST))
{
   if($_POST['cc-number'] !="" && $_POST['cc-number'] !="" && $_POST['cc-number'] !="" && $_POST['cc-number'] !="" )
   {

   	$crdNo=trim($_POST['cc-number']);
    $crdExp=trim($_POST['cc-exp']);
    $crdCvv=trim($_POST['cc-cvc']);
    $expCardExYr=explode('/',$crdExp);
    $expCardNo=explode(' ',$crdNo);
    $ccname=trim($_POST['cc-name']);
    $CardChk=0;
    $CardYrChk=0; 
 

    if(isset($expCardNo[0]) && isset($expCardNo[1]) && isset($expCardNo[2]) && isset($expCardNo[3])  )
    {  
          if(strlen($expCardNo[0])==4 && strlen($expCardNo[1])==4 && strlen($expCardNo[2])==4 && strlen($expCardNo[3])==4 )
          {
              $CardChk=2;
              $cardLastNo=$expCardNo[3];
              $CardNo=$expCardNo[0].$expCardNo[1].$expCardNo[2].$expCardNo[3]; 

          }
          else
          {
             $CardChk="Invaid details try again";
             $smarty->assign('contact_post_err', "$CardChk"); 
             $smarty->assign('profile', "active");
             $smarty->display('card_dt_add.tpl');
             
          }


    }
    else
    {
        
        $smarty->assign('contact_post_err', "Invalid input try again"); 
        $smarty->assign('profile', "active");
        $smarty->display('card_dt_add.tpl');
          

    }

     if($CardChk==2)
    {
      if(isset($expCardExYr[0]) && isset($expCardExYr[1]))
      {
        $CardYrChk=3;
        $cardYR=trim($expCardExYr[1]);
        $cardMNTH=trim($expCardExYr[0]);
      }
      else
      {
        	 $CardChk="Invaid details try again";
             $smarty->assign('contact_post_err', "$CardChk"); 
             $smarty->assign('profile', "active");
             $smarty->display('card_dt_add.tpl');

      }
    }  
    if($CardChk==2 && $CardYrChk==3) /** chk card no last four digit **/
    {

     $chkToken=$db->query("SELECT COUNT(tk_id) As tCnt,tk_id FROM user_card_token WHERE card_no=:card_no AND user_id=:user_id",array("card_no"=>"$cardLastNo","user_id"=>"$sesUID"));

		if($chkToken[0]['tCnt']==0)  
		{
            $chkkey=$db->query("SELECT s_key,p_key FROM packages_key");
    		$keyVals=$chkkey[0]['s_key'];
    		\Stripe\Stripe::setApiKey($keyVals);  /** Create a token **/
            try{
    $TokenCreation=\Stripe\Token::create(array(
    "card" => array(
    "number" => "$CardNo",
    "exp_month" => "$cardMNTH",
    "exp_year" => "$cardYR",
    "cvc" => "$crdCvv"
    )));


    $finalToken=$TokenCreation->id;
    if($finalToken !="")    /** Create Customer for above token **/
    {
    try{
    $customer = \Stripe\Customer::create(array(
    'email' => "$user_Mail",
    'source'  => "$finalToken",

    ));
     $CustomerId=$customer->id;
    
      if($CustomerId !=""){

     $InsertTk=$db->query("INSERT INTO user_card_token (user_id,token_key,card_no,customer_stripe_id,holder_name,expr_date) VALUES (:user_id,:token_key,:card_no,:customer_stripe_id,:holder_name,:expr_date) ",
     array("user_id"=>"$sesUID","token_key"=>"$finalToken","card_no"=>"$cardLastNo",
  "customer_stripe_id"=>"$CustomerId","holder_name"=>"$ccname","expr_date"=>"$crdExp"));
  echo "<script>alert('Token created successfully') </script>";
    if(isset($_SESSION['OFFPACKID']))
    {

       if($_SESSION['OFFPACKID']!="" && $_SESSION['CAT']=='pk')
       {
          
          echo "<script>location.href='package_checkout.php';</script>";
         exit;
       	// 	$page='package_checkout.php';
       	// header("location:".$page);
        //    exit;  

       }
       elseif($_SESSION['OFFPACKID']!="" && $_SESSION['CAT']=='ev')
       {
         echo "<script>location.href='events_checkout.php';</script>";
         exit;
       	// $page='events_checkout.php';
       	// header("location:".$page);
           //exit;  

       }
       else
       {
         echo "<script>location.href='package.php';</script>";
         exit;
       	// $page='package.php';
       	// header("location:".$page);
        //   exit; 
       }


    }
    else
     {
         
         echo "<script>location.href='package.php';</script>";
         exit;
     	 //$page='package.php';
         //@header("location:".$page);
         //exit; 

     }

     

      }
     else{

      

            $CardChk="Invalid Customer id please try again";
             $smarty->assign('contact_post_err', "$CardChk"); 
             $smarty->assign('profile', "active");
             $smarty->display('card_dt_add.tpl');

    }
    }catch(Exception $e)
    {

            
             $smarty->assign('contact_post_err', $e->getMessage()); 
             $smarty->assign('profile', "active");
             $smarty->display('card_dt_add.tpl');
     

    }
    }
    else
    {

    $smarty->assign('contact_post_err', "Invalid token please try again"); 
             $smarty->assign('profile', "active");
             $smarty->display('card_dt_add.tpl');
    }


    }
    catch(Exception $e){


             $smarty->assign('contact_post_err', $e->getMessage()); 
             $smarty->assign('profile', "active");
             $smarty->display('card_dt_add.tpl');
    }





		}
		else
		{
 
		$smarty->assign('contact_post_err', "This card number already exists"); 
        $smarty->assign('profile', "active");
        $smarty->display('card_dt_add.tpl');

		}


	

    }


   }
	 

}
 

 $smarty->assign('profile', "active");
 $smarty->display('card_dt_add.tpl');
 


 

 

 
 




 
