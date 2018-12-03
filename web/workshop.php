<?php
	session_start();
	include realpath(__DIR__ . '/..')."/configs/config.php";	 

	$ChkLogin=0;
	$suname='' ;
	$smail='' ;
	if(isset($_SESSION) && isset($_SESSION['UID']))
	{

		if($_SESSION['UID']!=""){
		    
			$ChkLogin=1;
			$suname=$_SESSION['UNAME'] ;
			$smail=$_SESSION['UEMAIL'] ;
		}
	}
	//$ChkLogin=1;


	$id = $_POST['hidId'];
	if (!($id>0)){
	        echo "<script>location.href='notes_re.php'; </script>";
	   exit;
		//$msg = array("error" => "Invalid Request");
	} 
	else{
		$sql = "SELECT id,name,description,is_active,DATE_FORMAT(event_date,'%d-%b-%Y') as event_date,created_at,updated_at,price FROM events where id =".$id;
		$result = $db->query($sql);
		if($result->num_rows > 0)
		{
			$msg = str_replace('../', '', $result->row);
		}
		else{
			$msg = array("error" => "Invalid Request");
		}
	}
	$smarty->assign('events',$msg);
	$smarty->assign('ChkLogin',$ChkLogin);
	$smarty->assign('unameVal',$suname);
	$smarty->assign('mailVal',$smail);

	$smarty->display('workshop.tpl');

	