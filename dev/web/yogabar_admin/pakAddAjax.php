<?php
require_once(realpath(__DIR__ . '/../..')."/configs/vendor/autoload.php");
require_once(realpath(__DIR__ . '/../..')."/configs/db/Db.class.php");
$db = new Db();

$GetMode=$_POST['mode'];
 
if($GetMode=='planAdd')
{
	$chkkey=$db->query("SELECT s_key,p_key FROM packages_key");
	$keyVals=$chkkey[0]['s_key'];
	\Stripe\Stripe::setApiKey($keyVals);
	$planid=trim($_POST['pid']);
	$name=trim($_POST['name']);
	$price=trim($_POST['price']);
	$selIntr=trim($_POST['selIntr']);
	$group_type=trim($_POST['group_type']);
        $pak_Intervel_id=trim($_POST['selIntr']);
        $pak_tot_month=$_POST['totMon'];
	$totMon=1;
	$group_type=$_POST['group_type'];
	$chkkey=$db->query("SELECT COUNT(id) As Cnts FROM packages WHERE stripe_plan_id=:stripe_plan_id",
        array("stripe_plan_id"=>"$planid"));

	$chkVal=$chkkey[0]['Cnts'];
	if($chkVal==0)
	{


	try{

               if($pak_tot_month>1){
		 $Plan= \Stripe\Plan::create(array(
		"name" => $name,
		"id" => $planid,
		"interval"=> 'month',
		"currency" => "SGD",
		"interval_count"=>1,
		"amount" =>($price*100) 
		));

                $ResPlanid=$Plan->id; 
                }
                else
                {
                 $ResPlanid=$planid; 
                } 


		 
                if($ResPlanid !="")
                { 
		$sql = $db->query("INSERT INTO packages SET name='$name', price='$price', group_type_id=$group_type, created_at=now(), updated_at=now(),stripe_plan_id='$ResPlanid',pak_Intervel_id=$pak_Intervel_id,pak_total_month=$pak_tot_month");

                
		echo "1#$#Package added succesfully";
		exit();
                }
                else{

                 echo "2#$#Please try again";
		exit();
                } 

 

	}
	catch(Exception $e){
	echo "3#$#".$e->getMessage();
	exit();
	}

	}
	else
	{

	echo "2#$#Package already exists";
	exit(); 

	}


	

}
elseif($GetMode=='planActDeact')
{
 $id=$_POST['id'];
 $chkid=$db->query("SELECT COUNT(id) As Cnts,active FROM packages WHERE id=:id",array("id"=>"$id"));
 $activ=1;
 if($chkid[0]['Cnts']>0)
 {
   if($chkid[0]['active']==1)
   {

     $activ=0;

   }

   $chkid=$db->query("UPDATE packages SET active=:active WHERE id=:id",array("active"=>"$activ","id"=>"$id"));
   echo "1";

 }
 else
 {
    echo 0;

 }



 

}
elseif($GetMode=='planDel')
{

 $id=$_POST['id'];
 
 $chkid=$db->query("DELETE  FROM  packages WHERE id=:id",array("id"=>"$id"));
   echo "1";


}




?>
