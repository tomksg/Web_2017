<?php
 
error_reporting(E_ALL);
ini_set("display_errors", 1);

include('config.php');
session_start();
$user_check=$_SESSION['login_user'];
// echo $_SESSION["login_user"];
$ses_sql=mysqli_query($bd,"SELECT id FROM marryme WHERE id='$user_check'");
 
$row=mysqli_fetch_array($ses_sql);
 // echo '$row :';
 // print_r($row);
 // echo '<br>';
$login_session=$row[0];
 // echo "<script>alert(\"Login 실패\");</script>";
	
 if(!isset($login_session))
 {
 	echo "<script>alert(\"Login 실패\");</script>";
 	// header("Location: 2.php");
 }
 
?>