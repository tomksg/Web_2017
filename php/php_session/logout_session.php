<?php
session_start();
session_destroy();

if(empty($_SESSION)){ //isset은 있으면 무조건 근데 이건 값이 0이어도 반환
	//array 형태로 보여주기
	echo "<br/>";
	echo "If Refreshed? the Session destroy works! <br/>";
}else{

	echo "Session didn't destroyed right now but it will!<br/>";
	print_r($_SESSION);
	echo "<br/>";
	echo "Look! still has the cookiee inside with it!<br/>";
} 

// if (isset($_COOKIE[session_name()])) {
//     setcookie(session_name(), '', time()-42000, '/');
// echo "Session destroyed<br/>";
// echo "Session destroyed<br/>";
// echo "Session destroyed<br/>";

// }
// session_destroy();
 
echo "<a href=logout_session2.php> function has been ran! session destroyed? lets findout! <br/>";
?>

<!-- 
    session_start();
    session_unset();
    session_destroy();
    session_write_close();
    setcookie(session_name(),'',0,'/');
    session_regenerate_id(true);

	이내용은 쓸만한 old session destroy


// $prevPage = $_SERVER['HTTP_REFERER'];
// // 변수에 이전페이지 정보를 저장

// header('location:'.$prevPage);
// // 페이지 이동

--> 

