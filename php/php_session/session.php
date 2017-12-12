<?php


session_start();
$my_id = "tomksg";
$my_pw = 123;
$_SESSION['device'] ='Galaxy8';
$_SESSION['color'] = 'black';
$_SESSION['id'] = $my_id;
$_SESSION['pw'] = $my_pw;
echo "making session <br/>";
echo "==================================<br/>";
echo "<a href=session2.php> 확인 이동 <br/>";

?>