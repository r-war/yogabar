<?php
require_once "session.php";
include realpath(__DIR__ . '/../..')."/configs/config.php";
$id = $_REQUEST['id'];
if (!($id > 0))
{
	header("location:coupon.php");
	exit();
}
if ($_POST){
	$name = $_POST["name"];		
 	$price = $_POST["discount"];
 	$group_type = $_POST['group_type'];
    $dis_type_id=$_POST['distype'];
    $coupon_from=date('Y-m-d',strtotime($_POST["frmDt"]));
    $coupon_to=date('Y-m-d',strtotime($_POST["toDt"]));


       $chkCoupon="SELECT count(id) as Cnt FROM coupon WHERE code='$name' and id !=$id ";
        $chk_res=$db->query($chkCoupon);
        if($chk_res->rows[0]['Cnt']==0)
        {
            $sql = "UPDATE coupon SET code='".addslashes($name)."', discount='".addslashes($price)."', updated_at=now(),dis_type_id=$dis_type_id,coupon_from='".$coupon_from."' ,coupon_to='".$coupon_to."'  WHERE id=".$id;
 	$db->query($sql);
 	$smarty->assign('coupon_add', "The Coupon updated successfully");

        }
        else
        {

      $smarty->assign('coupon_add', "The Coupon alredy exists");
      }
 	


}
$sql = "SELECT id,code,dis_type_id,discount,DATE_FORMAT(coupon_from,'%d-%m-%Y') as coupon_from,DATE_FORMAT(coupon_to,'%d-%m-%Y') as coupon_to,created_at,updated_at,active FROM coupon where id=".$id;
$blog_rs = $db->query($sql);

$sql = "SELECT * FROM discount_type ";
$dis_rs = $db->query($sql);
$smarty->assign('discount_type', $dis_rs->rows);

$smarty->assign('coupon_rs', $blog_rs->row);
$smarty->assign('coupon', "active");
$smarty->display('admin/coupon_edit.tpl');
?>
