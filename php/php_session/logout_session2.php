<?php
echo "Did Session destroyed?<br/>";
session_start();
session_destroy();

if(empty($_SESSION)){ //isset은 있으면 무조건 근데 이건 값이 0이어도 반환
	//array 형태로 보여주기
	echo "<br/>";
	echo "Yeah Session destroyed<br/>";
}else{

	echo "Nope Session didn't destroyed<br/>";
	print_r($_SESSION);
} 

// if (isset($_COOKIE[session_name()])) {
//     setcookie(session_name(), '', time()-42000, '/');
// echo "Session destroyed<br/>";
// echo "Session destroyed<br/>";
// echo "Session destroyed<br/>";

// }
// session_destroy();
 
echo "<a href=login_session.php> session 생성 <br/>";
?>