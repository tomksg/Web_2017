<?php

include("config_getdata.php");
echo "confirm file information <br />";

  // 이전화면에서 이름이 입력되지 않았으면 "이름을 입력하세요" 메시지 출력
if(!$_POST['content']) {
    echo("
      <script>
      window.alert('소개를 입력하세요')
      history.go(-1)
      </script>
      ");
    exit;
}else{
    $content1 = $_POST['content'];
}
// echo $_POST['content'];
if(isset($_FILES['upload']["name"])&&(!empty($_FILES["upload"]))){
    $name = $_FILES['upload']["name"];
    $tmp_name = $_FILES['upload']['tmp_name'];
    $Error = $_FILES['upload']['error'];
    $uploadfile = $_FILES["upload"]["name"];
}

// print_r($_FILES);
$query = "SELECT number from main WHERE number =1";
$result = mysqli_query($bd,$query) or die ("Error Querying database.");
$row = mysqli_fetch_assoc($result);

$id = $row['number'];
 // // 서버 임시 디렉토리 c:\apm_setup\temp

if(move_uploaded_file($tmp_name,$uploadfile)){

  // upload 는 -> name 으로 지정되어있다. upload php 로 sumbit 기능으로 받을 파일
   // tmp_name 은 이 파일의 temp 이름으로 다시 지정

   echo "파일이 업로드 되었습니다.<br />";
   echo "<img src ={$_FILES['upload']['name']}> <p>";
   echo "1. file name : {$_FILES['upload']['name']}<br />";
   echo "4. temporary file name : {$_FILES['upload']['tmp_name']}<br />";


  $query = "UPDATE main SET image='$uploadfile', description='$content1' WHERE id=$id";//업데이트 쿼리문
  $result=mysqli_query( $bd,$query);
  mysqli_close($bd);
} else {
   echo "파일 업로드 실패 !! 다시 시도해주세요.<br />";
}

 //  echo "2. file type : {$_FILES['upload']['type']}<br />";
 //  echo "3. file size : {$_FILES['upload']['size']} byte <br />";
/*
$myusername=addslashes($_POST['id']);
$mypassword=addslashes($_POST['pw']);

$sql="SELECT id FROM marryme WHERE id='$myusername' and pw='$mypassword'";

$result=mysqli_query($bd,$sql);
if(!$result){
die(mysqli_error($bd));
*/

// <html>
// <head></head>
// <body>
//   <form method ="post" action ="upload2.php" enctype="multipart/form-data">
//     <input type="file" size=100 name="upload"><hr>
//     <!-- 여기서 name upload 가 이 파일의 temp 이름이다 -->
//     <input type="submit" value="send">
//   </form>
// </body>
// </html>

?>
