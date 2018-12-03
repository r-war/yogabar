<?php
require_once "session.php";
include realpath(__DIR__ . '/../..')."/configs/config.php";

if ($_POST){
	$title = $_POST["name"];		
 	$price = $_POST["discount"];
 	$distype=$_POST["distype"]; 
    $coupon_from=date('Y-m-d',strtotime($_POST["frmDt"]));
    $coupon_to=date('Y-m-d',strtotime($_POST["toDt"]));


        $chkCoupon="SELECT count(id) as Cnt FROM coupon WHERE code='$title' ";
        $chk_res=$db->query($chkCoupon);
        if($chk_res->rows[0]['Cnt']==0)
        {
      //coupon_from='".$coupon_from."',coupon_to='".$coupon_to.     
 	$sql = "INSERT INTO coupon SET code='".addslashes($title)."', discount='".addslashes($price)."', created_at=now(), updated_at=now() , dis_type_id=$distype, coupon_from='".$coupon_from."',coupon_to='".$coupon_to."'";
 	$db->query($sql);
 	$smarty->assign('coupon_add', "The Coupon added successfully");

        }
        else
         {
               $smarty->assign('coupon_add', "The Coupon already exists");
         }
 

        //$chkCoupon="SELECT count(id) FROM coupon WHERE code='$title' ";
        //$chk_res=$db->query($chkCoupon);
        
 


}





$sql = "SELECT * FROM discount_type ";
$dis_rs = $db->query($sql);
$smarty->assign('discount_type', $dis_rs->rows);
$smarty->assign('coupon', "active");
$smarty->display('admin/coupon_add.tpl');
?>
