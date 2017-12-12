<?php
session_start();
$id = session_id();
echo "등록된 세션 중 일부 세션 삭제하기 <br />";
echo "======================================== <br />";
unset($_SESSION['color']);
echo "color세션 삭제됨 <br />";
 
echo " device ".$_SESSION['device']."<br />";
echo " color ";

//array일경우 삭제 찾기
// if (isset($_POST['remove'])) {
//     $key=array_search($_GET['name'],$_SESSION['name']);
//     if($key!==false)
//     unset($_SESSION['name'][$key]);
//     $_SESSION["name"] = array_values($_SESSION["name"]);
// }

if(empty($_SESSION['color'])){ //isset은 있으면 무조건 근데 이건 값이 0이어도 반환
	print_r($_SESSION); //array 형태로 보여주기
	echo "<br/>";
	echo "NULL<br/>";
}else{
	print_r($_SESSION);
} 

echo "<a href=logout_session.php> session 삭제 <br/>";
?>