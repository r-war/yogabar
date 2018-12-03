<?php
session_start();

 include realpath(__DIR__ . '/..')."/configs/config.php";
 require_once(realpath(__DIR__ . '/..')."/configs/db/Db.class.php");
 $db = new Db();
 
 if(isset($_SESSION) && $_SESSION['UID'] !="" ) {
  $sesUID=$_SESSION['UID'];	
}
 else
 {echo "<script> location.href='login.php'; </script>"; }

 if (isset($_GET['id']) && $_GET['id']!='') { 

   $rid=$_GET['id'];

$Chk_sql=$db->query("SELECT COUNT(c_id) AS Cnts FROM user_card_details  WHERE  c_id=:c_id AND user_id=:user_id ",array("c_id"=>"$rid","user_id"=>"$sesUID"));

 
 
if($Chk_sql[0]['Cnts']==1)
{
	 $deleteSql=$db->query("DELETE FROM user_card_details WHERE c_id=:c_id  AND user_id=:user_id",
                                   					 array("c_id"=>"$rid",
                                         				     "user_id"=>"$sesUID"));
	echo "<script> alert('Record deleted successfully');location.href='card_details.php'; </script>";
	}
	else
	{
	echo "<script> alert('No record found');location.href='card_details.php'; </script>";
	}

}

//$Get_list=$db->query("SELECT c_id,user_id,card_no,card_holder_name,cv_no,created_at,updated_at,active,deleted,if(card_no='','',concat(SUBSTRING(card_no,:V1,:V2),:V3 ) ) as cardDtStr,if(cv_no='','',concat(SUBSTRING(cv_no,:V4,:V5),:V6 ) ) as cardCVDtStr FROM user_card_details WHERE active= :active AND user_id=:user_id ",array("V1"=>"1","V2"=>"5","V3"=>"XXXXXXXXXXX","V4"=>"1","V5"=>"1","V6"=>"XX",'active'=>"1",'user_id'=>"$sesUID"));
 
$Get_list=$db->query("SELECT tk_id,user_id,card_no,customer_stripe_id,created_at,token_key,if(card_no='','',concat(:V1,card_no)) as cardDtStr,holder_name,expr_date FROM user_card_token WHERE user_id=:user_id ",array("V1"=>"XXXXXXXXXXXX",'user_id'=>"$sesUID"));

//echo "<pre>" ;print_r($Get_list);
 $smarty->assign('userCardList',$Get_list);
 $smarty->assign('profile', "active");
 $smarty->display('card_details.tpl');
 
 

 

 
 




 
