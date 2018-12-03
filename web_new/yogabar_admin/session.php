<?php
session_start();
if (isset($_SESSION['yogabar']) == false)
{
	header("location:login.php");
	exit();
}
?>