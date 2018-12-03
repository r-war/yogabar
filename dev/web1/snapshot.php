<?php 
include realpath(__DIR__ . '/..')."/configs/config.php";
$s = '';
if($_GET['cat'])
	$s = ' WHERE img_category = "'.addslashes($_GET['cat']).'"';
$sql = "SELECT * FROM img_gallery {$s} order by img_category asc, id Desc";
$result = $db->query($sql);

$images_arr = array();
if($result->num_rows > 0)
{
	foreach ($result->rows as $key => $value) {
		$result->rows[$key]['thumb'] = resize('gallery/'.$value['img_path'], 190, 190);		
	}
}

$sql = "SELECT img_category FROM img_gallery group by img_category ";
$result_cat = $db->query($sql);

$smarty->assign('gallery_rs',$result->rows );
$smarty->assign('result_cat',$result_cat->rows );

$smarty->assign('news', "active");

$smarty->display('snapshot.tpl');