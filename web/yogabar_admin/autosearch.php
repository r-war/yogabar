<?php 
include realpath(__DIR__ . '/../..')."/configs/config.php";
$term = $_GET['term'];
$sql = "SELECT img_category FROM img_gallery WHERE img_category LIKE '%{$term}%' group by img_category  LIMIT 5";
$result = $db->query($sql);
$arr=array();
foreach ($result->rows as $value) {
	$arr[] = $value['img_category'];
}
echo json_encode($arr);
?>