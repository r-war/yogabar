<?php 
session_start();
if (isset($_SESSION['yogabar']))
{
	header("location:index.php");
	exit();
}

include realpath(__DIR__ . '/../..')."/configs/config.php";

if ($_POST)
{	
	$username = $_POST['username'];
	$password = $_POST['password'];
	$loginStatus = false;
	$sql = "SELECT * FROM user where username='".addslashes($username)."' LIMIT 1;";
	$result = $db->query($sql);
	if ($result->num_rows > 0)
	{
		if (call_user_func_array('sha1', array($password.$result->row['salt'])) == $result->row['password'])
		{
			$loginStatus = true;
		}
	}
	if ($loginStatus){
		$array = array("first_name" => $row->first_name, 'last_name' => 'last_name');
		$_SESSION['yogabar'] = $array;
		redirect("index.php");
	}
	else{
		$smarty->assign('login_error', 'The username and/or password is invalid.');
	}
}

$smarty->display('admin/login.tpl');