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


 if(isset($_GET['id']) && $_GET['id']!="" )
 {


    if (isset($_POST['frmSubmit']) && $_POST['frmSubmit']=='Update') {


if($_POST['uname'] !="" && $_POST['cardno'] !="" && $_POST['cvno'] !="" && $_POST['expmonth'] !="" && $_POST['expyr'] !="" )
  {  
    $uname=trim($_POST['uname']) ;  
    $cardno=trim($_POST['cardno']) ;  
    $cvno=trim($_POST['cvno']) ;  
    $expmonth=$_POST['expmonth']; 
    $expyr=$_POST['expyr'];
    $ValidReturn=0;
    if($uname!="")
    {
      if(preg_match("/^[a-zA-Z -]+$/", $uname))
      {
         $ValidReturn=1;
    	$smarty->assign('contact_post_err', "");
  
      } 
      else
      {  
        $smarty->assign('contact_post_err', "Name only letters");
       	  $ValidReturn=0;
      }
 

 
    }
    if($ValidReturn==1)
    {

	if($cardno!="")
	    {
	       if(is_numeric($cardno) && strlen($cardno)<17 )
	      {
		$ValidReturn=1;
		$smarty->assign('contact_post_err', "");
	      }
	      else
	      {
		$smarty->assign('contact_post', "");
		$smarty->assign('contact_post_err', "Invalid card number");
	       	$ValidReturn=0;
	      }
	 
	    }

    }
   if($ValidReturn==1)
    {
	if($cvno!="")
	{
	if(is_numeric($cvno) && strlen($cvno)<4 )
	{
        $smarty->assign('contact_post_err', "");
	$ValidReturn=1;
	}
	else
	{   
	$smarty->assign('contact_post', "");
	$smarty->assign('contact_post_err', "Invalid CVV number");
	$ValidReturn=0;
	}

   	}
    }
 if($ValidReturn==1){
 
     if($expmonth!="")
     { 
       if(is_numeric($cvno))
         {
           	$smarty->assign('contact_post_err', "");
		$ValidReturn=1;
         }
         else
         {
          	$smarty->assign('contact_post', "");
		$smarty->assign('contact_post_err', "Invalid month.");
		$ValidReturn=0;

        }
         
     }
      

 }

if($ValidReturn==1){
 
     if($expyr!="")
     {  
         $cYear=date('Y');
       if(is_numeric($expyr) && strlen($expyr)==4 && $expyr>=$cYear)
         {
           	$smarty->assign('contact_post_err',"");
		$ValidReturn=1;
         }
         else
         {
          	$smarty->assign('contact_post', "");
		$smarty->assign('contact_post_err', "Invalid year");
		$ValidReturn=0;

        }
         
     }
      

 }
 

if($ValidReturn==1)
     {
       $tblRId=$_GET['id'];
      

	 

	 $Chk_sql =$db->query("SELECT COUNT(c_id) AS Cnts FROM user_card_details  WHERE card_no=:card_no AND user_id=:user_id AND NOT c_id=:c_id",array("card_no"=>"$cardno","user_id"=>"$sesUID","c_id"=>"$tblRId"));

 
    if($Chk_sql[0]['Cnts']==0)
    {
 

	 $uname=trim($_POST['uname']) ;  
   	 $cardno=trim($_POST['cardno']) ;  
   	 $cvno=trim($_POST['cvno']) ;  
   	 $expmonth=$_POST['expmonth']; 
   	 $expyr=$_POST['expyr'];

	$Update_sql =$db->query("UPDATE user_card_details SET   card_no=:card_no,card_holder_name=:card_holder_name,cv_no=:cv_no,exp_month=:exp_month,
	exp_yr=:exp_yr WHERE c_id=:c_id AND user_id=:user_id",
	array("card_no"=>"$cardno","card_holder_name"=>"$uname","cv_no"=>"$cvno",
	"exp_month"=>"$expmonth","exp_yr"=>"$expyr","c_id"=>"$tblRId","user_id"=>"$sesUID"));

     // $sql = "UPDATE user_card_details SET card_no='$cardno',card_holder_name='$uname',cv_no='$cvno',exp_month='$expmonth',
      //exp_yr='$expyr' WHERE c_id=$tblRId AND user_id=$sesUID";
       
        //$db->query($sql);
        $smarty->assign('contact_post', "Card details updated successfully");
        $smarty->assign('contact_post_err', "");

      
 

    //unset($_POST); 
    }
    else
    {
      $smarty->assign('contact_post', "");
      $smarty->assign('contact_post_err', "Card number already exists");
    }
  

     }else{




}
     
 
if(isset($_POST["uname"])){
$smarty->assign("uname", $_POST["uname"]);
}

if(isset($_POST["cardno"])){
$smarty->assign("cardno", $_POST["cardno"]);
}

if(isset($_POST["cvno"])){
$smarty->assign("cvno", $_POST["cvno"]);
}

if(isset($_POST["expmonth"])){
$smarty->assign("expmonth", $_POST["expmonth"]);
}
 
if(isset($_GET["id"])){
$smarty->assign("ids", $_GET["id"]);
}

if(isset($_POST["expyr"])){
$smarty->assign("expyr", $_POST["expyr"]);
}

for($i=1; $i<13;$i++)
{    $selVal="";
      if($_POST["expmonth"]==$i)
      {  $selVal="selected true";
      }
      
	$monthArr[$i]="<option $selVal value='$i'>$i</option>";
 }

 $smarty->assign('userEditList',$chk_Res->rows);
 $smarty->assign('usermonthArr',$monthArr);
 $smarty->assign('profile', "active");
 $smarty->display('card_dt_update.tpl');



}
else{

$smarty->assign('contact_post', "");
        $smarty->assign('contact_post_err', "Some fields are empty");

 
if(isset($_POST["uname"])){
$smarty->assign("uname", $_POST["uname"]);
}

if(isset($_POST["cardno"])){
$smarty->assign("cardno", $_POST["cardno"]);
}

if(isset($_POST["cvno"])){
$smarty->assign("cvno", $_POST["cvno"]);
}

if(isset($_POST["expmonth"])){
$smarty->assign("expmonth", $_POST["expmonth"]);
}
 
if(isset($_GET["id"])){
$smarty->assign("ids", $_GET["id"]);
}

if(isset($_POST["expyr"])){
$smarty->assign("expyr", $_POST["expyr"]);
}

for($i=1; $i<13;$i++)
{    $selVal="";
      if($_POST["expmonth"]==$i)
      {  $selVal="selected true";
      }
      
	$monthArr[$i]="<option $selVal value='$i'>$i</option>";
 }

 //$smarty->assign('userEditList',$chk_Res->rows);
   $smarty->assign('usermonthArr',$monthArr);
 $smarty->assign('profile', "active");
 $smarty->display('card_dt_update.tpl');


} 

 

     }
      else{


     $c_id=$_GET['id'];
    
    $chk_card=$db->query("SELECT count(c_id) AS pCnt,c_id,user_id,card_no,card_holder_name,cv_no,exp_yr,exp_month FROM user_card_details  WHERE c_id=:c_id AND user_id=:user_id ",array("c_id"=>"$c_id","user_id"=>"$sesUID"));

   if($chk_card[0]['pCnt']>0)
    {
       
    }
    else
    {
      $smarty->assign('contact_post', "");
      $smarty->assign('contact_post_err', "No data found");
    }

 for($i=1; $i<13;$i++)
{    $selVal="";
      if($chk_card[0]['exp_month']==$i)
      {  $selVal="selected true";
      }
      
	$monthArr[$i]="<option $selVal value='$i'>$i</option>";
 }

 
 $smarty->assign('userEditList',$chk_card);
 $smarty->assign('usermonthArr',$monthArr);
 $smarty->assign('profile', "active");
 $smarty->display('card_dt_edit.tpl');

}
   
    


 }
else
{

echo '<script>location.href="card_details.php" </script>';

}
 
 
 
 
 
 

 

 
 




 
