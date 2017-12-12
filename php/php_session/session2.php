<?php
  ob_start();
 echo "출력문을 먼저 사용하기 때문에 위에 ob_start() 를 작성 <br />";
 //session start

 session_start();
 $id=session_id();
//isset으로 있는지 확인할수있다.
 echo " 현재 내 접속id는 = $id <br />";
 echo " 현재 내 이름은 = " . $_SESSION['id']."<br />";
 echo " 현재 내 비밀번호는 =". $_SESSION['pw']."<br />";
 echo "세션에 등록된 내용은 " . $_SESSION['device']."<br />";
 echo "세션에 등록된 내용은 " . $_SESSION['color']."<br />";

//session 삭제 : unset($_SESSION['변수명']) ex) $id
echo "<a href=session.php> 뒤로 가기 <br/>";
echo "<a href=session3.php> color 삭제 이동 <br/>";


echo "<a href=logout_session.php> session 삭제 <br/>";
?>