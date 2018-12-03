<?php
session_start();
require_once(realpath(__DIR__ . '/..')."/configs/vendor/autoload.php");
require_once(realpath(__DIR__ . '/..')."/configs/db/Db.class.php");
$db = new Db();
$GetMode=$_POST['mode'];
if(isset($_SESSION)) {

  if(isset($_SESSION['UID']) && isset($_SESSION['UEMAIL']))
  {

        $user_id=$_SESSION['UID'];
        $user_Mail=$_SESSION['UEMAIL'];
 
  }
  else{
         echo 0;
         exit(); 
 
  }
  
}
else
{

  echo 0;
  exit(); 
}

if($GetMode=='CardDel')
{

	$idVal=$_POST['ids'];
	$Chk_sql=$db->query("SELECT COUNT(tk_id) AS Cnts FROM user_card_token  WHERE  tk_id=:tk_id AND user_id=:user_id ",array("tk_id"=>"$idVal","user_id"=>"$user_id"));

	if($Chk_sql[0]['Cnts']>0)
	{

	  $delrec=$db->query("DELETE FROM user_card_token WHERE tk_id=:tk_id AND user_id=:user_id  ",array("tk_id"=>"$idVal","user_id"=>"$user_id"));

		echo 1;
		exit;

	}
	else
	{
		 echo 2;
		exit;

	}

}
?>
