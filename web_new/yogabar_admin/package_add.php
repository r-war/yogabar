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
?>
