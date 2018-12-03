<?php
require_once "session.php";
include realpath(__DIR__ . '/../..')."/configs/config.php";
require_once(realpath(__DIR__ . '/../..')."/configs/vendor/autoload.php");
require_once(realpath(__DIR__ . '/../..')."/configs/db/Db.class.php");
$db = new Db();

$getPlanTerm=$db->query("SELECT pak_int_id,pak_Intervel FROM package_intervel WHERE deleted=:deleted order by pak_int_id DESC",array("deleted"=>"0"));
$PushSelecVal="<option value=''>---Intervel---</option>";
foreach($getPlanTerm AS $key=>$val)
{
$PushSelecVal.="<option value='".$val['pak_int_id']."'>".$val['pak_Intervel']."</option>";   

}
$TotMnt="<option value=''>---No of Month---</option>";
$smarty->assign('package', "active");
$smarty->assign('PushSelecVal', "$PushSelecVal");
$smarty->assign('TotMnt', "$TotMnt");
$smarty->display('admin/package_add.tpl');
 

/* require_once "session.php";
include realpath(__DIR__ . '/../..')."/configs/config.php";

if ($_POST){
	$title = $_POST["name"];		
 	$price = $_POST["price"];
 	$group_type = $_POST['group_type'];
 	$sql = "INSERT INTO packages SET name='".addslashes($title)."', price='".addslashes($price)."', group_type_id={$group_type}, created_at=now(), updated_at=now();";
 	$db->query($sql);
 	$smarty->assign('package_add', "The package added successfully");
}
$smarty->assign('package', "active");
$smarty->display('admin/package_add.tpl');

*/
?>