<?php
require_once(realpath(__DIR__ . '/../..')."/configs/vendor/autoload.php");
require_once(realpath(__DIR__ . '/../..')."/configs/db/Db.class.php");
$db = new Db();

$GetMode=$_POST['mode'];
 
 
if($GetMode=='planActDeact')
{
 $id=$_POST['id'];
 $chkid=$db->query("SELECT COUNT(ban_id) As Cnts,active FROM img_banner WHERE ban_id=:id",array("id"=>"$id"));
 $activ=1;
 if($chkid[0]['Cnts']>0)
 {
   if($chkid[0]['active']==1)
   {

     $activ=0;

   }

   $chkid=$db->query("UPDATE img_banner SET active=:active WHERE ban_id=:id",array("active"=>"$activ","id"=>"$id"));
   echo "1";

 }
 else
 {
    echo 0;

 }



 

}




?>
