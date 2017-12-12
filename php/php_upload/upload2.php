<?php
 echo "confirm file information <br />";
 
 $uploadfile = $_FILES['upload'] ['name'];
 
 // 서버 임시 디렉토리 c:\apm_setup\temp

 if(move_uploaded_file($_FILES['upload']['tmp_name'],$uploadfile)){
 
 	// upload 는 -> name 으로 지정되어있다. upload php 로 sumbit 기능으로 받을 파일
 	 // tmp_name 은 이 파일의 temp 이름으로 다시 지정
 
  echo "파일이 업로드 되었습니다.<br />";
  echo "<img src ={$_FILES['upload']['name']}> <p>";
  echo "1. file name : {$_FILES['upload']['name']}<br />";
  echo "2. file type : {$_FILES['upload']['type']}<br />";
  echo "3. file size : {$_FILES['upload']['size']} byte <br />";
  echo "4. temporary file name : {$_FILES['upload']['tmp_name']}<br />";
 } else {
  echo "파일 업로드 실패 !! 다시 시도해주세요.<br />";
 }
?>