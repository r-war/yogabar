<?php
session_start();
require_once(realpath(__DIR__ . '/..')."/configs/vendor/autoload.php");
require_once(realpath(__DIR__ . '/..')."/configs/db/Db.class.php");
$db = new Db();
$GetMode=$_POST['mode'];
if(isset($_SESSION)) {

  if(isset($_SESSION['UID']) && isset($_SESSION['UEMAIL']))
  {

        $user_id=$_SESSION['UID'];
        $user_Mail=$_SESSION['UEMAIL'];
 
  }
  else{
         echo 0;
         exit(); 
 
  }
  
}
else
{

  echo 0;
  exit(); 
}

if($GetMode=='CardAdd')
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
            echo $CardChk=1;
            exit();
          }


    }
    else
    {
        echo $CardChk=1;
        exit(); 

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
        echo $CardYrChk=1;
        exit();

      }
    }
    if($CardChk==2 && $CardYrChk==3) /** chk card no last four digit **/
    {

    $chkToken=$db->query("SELECT COUNT(tk_id) As tCnt,tk_id FROM user_card_token WHERE card_no=:card_no AND user_id=:user_id",array("card_no"=>"$cardLastNo","user_id"=>"$user_id"));


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
    array("user_id"=>"$user_id","token_key"=>"$finalToken","card_no"=>"$cardLastNo",
"customer_stripe_id"=>"$CustomerId","holder_name"=>"$ccname","expr_date"=>"$crdExp"));

    if(isset($_SESSION['OFFPACKID']))
    {

       if($_SESSION['OFFPACKID']!="" && $_SESSION['CAT']=='pk')
       {
          echo "11@#@".$customer->id;
           exit;

       }
       elseif($_SESSION['OFFPACKID']!="" && $_SESSION['CAT']=='ev')
       {
          echo "20@#@".$customer->id;
           exit;

       }
       else
       {
         echo "10@#@".$customer->id;
          exit;
       }


    }
    else
     {
         echo "10@#@".$customer->id;
         exit;

     }

    //echo "10@#@".$customer->id;
   // exit;

    }
    else{

    echo "3@#@Invalid Customer id please try again";
    exit();

    }
    }catch(Exception $e)
    {

    echo "3@#@".$e->getMessage();
    exit();

    }
    }
    else
    {

    echo '1';
    exit;
    }


    }
    catch(Exception $e){


    echo "3@#@".$e->getMessage();
    exit();
    }
    }
    else   
    {
     echo "4@#@This card number already exists";
     exit; 
    }  
    }
 
}
?>
