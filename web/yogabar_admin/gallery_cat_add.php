<?php
require_once "session.php";
include realpath(__DIR__ . '/../..')."/configs/config.php";

if ($_POST){
	$title = $_POST["title"];	
	$category = $_POST['category'];
	$sql = "INSERT INTO gallery_category SET name_cat='".addslashes($title)."';";
 	$db->query($sql);
	//$fileName = basename($_FILES["image"]["name"]);
	//$target_path = GALLERY.$fileName;
/*	if(move_uploaded_file($_FILES['image']['tmp_name'], $target_path)) 
 	{
 		$msg = "The file ". basename( $_FILES['image']['name']). " has been uploaded";
 		$sql = "INSERT INTO img_gallery SET name='".addslashes($title)."', img_path='".$fileName."', img_category='".addslashes($category)."', created_at=now(), updated_at=now();";
 		$db->query($sql);
 	} 
 	else {
 		$msg = "Sorry, there was a problem uploading your file.";
 	}*/
 	$msg="successfully add gallery category";
	$smarty->assign('gallery_add', $msg);//"The image was successfully uploaded");
}

$smarty->assign('gallery', "active");
$smarty->display('admin/gallery_cat_add.tpl');
?>