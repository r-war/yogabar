<?php
require_once "session.php";
include realpath(__DIR__ . '/../..')."/configs/config.php";
require_once(realpath(__DIR__ . '/../..')."/configs/db/Db.class.php");
$db = new Db();

$catName='';
$catType='';
if(isset($_POST))
{
  if($_POST['frmDt'] !="" && $_POST['frmDt'] !="" )
  {
   $frmDate=date('Y-m-d',strtotime($_POST['frmDt']));
   $toDate=date('Y-m-d',strtotime($_POST['toDt']));
   $catType=$_POST['catType'];
  }
  else
  {
    echo "<script> location.href='report_events.php'; </script>";
	exit;
  }

}
else
{
	echo "<script> location.href='report_events.php'; </script>";
	exit;
} 
 
if($catType==1)
{
    $catName='Workshop';

    $getAllSubunSubList = $db->query("SELECT * FROM user_events_registration a, events b
      WHERE a.e_cat_id=:cat AND a.events_id=b.id AND (date(a.cur_date)) BETWEEN :frmDate AND :toDate
      ", array('cat' => "1",  "frmDate"=>"$frmDate", "toDate"=>"$toDate"));
	/*$getAllSubunSubList=$db->query("SELECT * FROM user_pay_pack_subscribe a,user_events_registration b,events ev WHERE NOT a.res_id=:a1 AND a.res_result =:a2 AND b.e_cat_id=:cat
		AND NOT a.e_reg_id =:a3 AND NOT a.e_reg_id =:a4 AND b.e_reg_id=a.e_reg_id AND (date(b.cur_date) BETWEEN :frmDate AND :toDate ) AND a.events_id=ev.id",array("a1"=>"","a2"=>"succeeded","a3"=>"0","a4"=>"0","frmDate"=>"$frmDate","toDate"=>"$toDate"));*/
}
else{ 
	$catName='Retreat';
 	$getAllSubunSubList=$db->query("SELECT * FROM user_events_registration ur,events ev WHERE ur.events_id=ev.id AND ur.e_cat_id=:ecatDI AND (date(ur.cur_date) BETWEEN :frmDate AND :toDate ) ",array("ecatDI"=>"2","frmDate"=>"$frmDate","toDate"=>"$toDate"));

 

}
//echo count($getAllSubunSubList);
//echo "<pre>";print_r($getAllSubunSubList);
//$smarty->assign('package_rs',$result->rows );
$smarty->assign('getAllSubunSubList',$getAllSubunSubList);
$smarty->assign('package', "active");
$smarty->assign('catNameVal', "$catName");
$smarty->assign('catTypeVal', "$catType");
if($catType==1)
{
   $smarty->display('admin/event_sub_work.tpl');
}
else{

	$smarty->display('admin/event_sub.tpl');
}

?>
