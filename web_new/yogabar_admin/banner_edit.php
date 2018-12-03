<?php
require_once "session.php";
include realpath(__DIR__ . '/../..')."/configs/config.php";
if (isset($_GET['id'])){
	$sql = "SELECT * FROM img_banner where ban_id =".$_GET['id'];
	$result = $db->query($sql);
	if ($result->num_rows > 0){
		unlink(GALLERY.$result->row['img_path']);
		$sql = "DELETE FROM img_banner where ban_id=".$_GET['id'];
		$db->query($sql);
	}
}
if(isset($_GET['actid']))
{

$sql = "SELECT * FROM img_banner where ban_id =".$_GET['actid'];
	$result = $db->query($sql);
	if ($result->num_rows > 0){
           $activeUp=1;
          if($result->row['active'])
          {
              $activeUp=0;
          }
          
          $updateTbl="UPDATE img_banner SET active=$activeUp WHERE ban_id=".$_GET['actid'];

        }

}

$sql = "SELECT * FROM `img_banner` order by ban_id Desc";
$result = $db->query($sql);

$smarty->assign('banner_rs',$result->rows );
$smarty->assign('banner', "active");

$smarty->display('admin/banner_edit.tpl');
?>
