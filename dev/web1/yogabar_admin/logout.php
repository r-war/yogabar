<?php
require_once "session.php";
unset($_SESSION['yogabar']);
header("location:login.php");
exit();
?>