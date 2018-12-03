<?php 
include realpath(__DIR__ . '/..')."/configs/config.php";

$discount= $_POST['discount'];
$pvt2= $_POST['pvt2'];
$code= $_POST['code'];

$pvt = $pvt2/100;

$sql="SELECT * FROM `coupon` WHERE code LIKE '$code'";

$result= $db->query($sql);

$discount = $result->row['discount'];

$numrows = $result->num_rows;


if($numrows > 0)
{
  $ss= $pvt * $discount;
  echo $ss;
}
else
{
echo "invalidcoupon";
}
