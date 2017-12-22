<?php
//이파일은 로그인을 위한 설정파일입니다.
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "gk10501050";
$mysql_database = "test_db"; //db 명 입력

$bd = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password) or die("db connect error");

mysqli_select_db($bd, $mysql_database) or die("db connect error");

?>
