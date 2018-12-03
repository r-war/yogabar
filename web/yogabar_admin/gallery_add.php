<?php
require_once "session.php";
include realpath(__DIR__ . '/../..')."/configs/config.php";

if ($_POST){
	$title = $_POST["title"];	
	$category = $_POST['category'];
	$fileName = basename($_FILES["image"]["name"]);
	$target_path = GALLERY.$fileName;
	if(move_uploaded_file($_FILES['image']['tmp_name'], $target_path)) 
 	{
 		$msg = "The file ". basename( $_FILES['image']['name']). " has been uploaded";
 		$sql = "INSERT INTO img_gallery SET name='".addslashes($title)."', img_path='".$fileName."', img_category='".addslashes($category)."', created_at=now(), updated_at=now();";
 		$db->query($sql);
 	} 
 	else {
 		$msg = "Sorry, there was a problem uploading your file.";
 	}
	$smarty->assign('gallery_add', $msg);//"The image was successfully uploaded");
}
$sql_cat= "SELECT * FROM gallery_category";
$cat= $db->query($sql_cat);
$smarty->assign('category',$cat->rows);
$smarty->assign('gallery', "active");
$smarty->display('admin/gallery_add.tpl');
?>