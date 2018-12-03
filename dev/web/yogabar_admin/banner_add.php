<?php
require_once "session.php";
include realpath(__DIR__ . '/../..')."/configs/config.php";
  $curTime=time();
  
if ($_POST){
	$title = trim($_POST["title"]) ;	
	$descr = $_POST['descr'];
	$fileName = basename($_FILES["image"]["name"]);
        $imgName=$curTime.'_'.$fileName;
	$target_path = GALLERY.$imgName;
        $chktitle="SELECT count(ban_id) AS cCnt FROM img_banner WHERE ban_title='$title' AND active=1";
        $result=$db->query($chktitle); 
        $ChkVals=$result->rows ;
        $Url=trim($_POST["surl"]) ; 

       if($ChkVals[0]['cCnt']>0)
       {
          
         $msg = "Title already exists.";
 
       }
       else
       {

		if(move_uploaded_file($_FILES['image']['tmp_name'], $target_path)) 
		{
		$msg = "The file ". basename( $_FILES['image']['name']). " has been uploaded";
		$sql = "INSERT INTO img_banner SET ban_title='".addslashes($title)."', img_path='$imgName',  bann_desc='".addslashes($descr)."',btn_link='".addslashes($Url)."'" ;
		$db->query($sql);
		} 
		else {
		$msg = "Sorry, there was a problem uploading your file.";
		}

       }


	
	$smarty->assign('gallery_add', $msg);//"The image was successfully uploaded");
}
$smarty->assign('banner', "active");
$smarty->display('admin/banner_add.tpl');
?>
