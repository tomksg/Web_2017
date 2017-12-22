<?php

include('config_settings.php');
session_start();
$user_check=$_SESSION['login_user'];
$ses_sql=mysqli_query($bd,"SELECT id FROM marryme WHERE id='$user_check'");

$row=mysqli_fetch_array($ses_sql);
$login_session=$row[0];

 if(!isset($login_session))
 {
 	header("Location: err.php");
 }

?>
