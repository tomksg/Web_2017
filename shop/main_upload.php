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
if(isset($_FILES['upload']["name"])&&(!empty($_FILES["upload"]))){
  $name = $_FILES['upload']["name"];
  $tmp_name = $_FILES['upload']['tmp_name'];
  $Error = $_FILES['upload']['error'];
  $uploadfile = $_FILES["upload"]["name"];
}

$query = "SELECT number from main WHERE number =1";
$result = mysqli_query($bd,$query) or die ("Error Querying database.");
$row = mysqli_fetch_assoc($result);

$id = $row['number'];



 // // 서버 임시 디렉토리 c:\apm_setup\temp


$path = "shop_data/00_index/";
$filename =  $path.date("YmdHis").".jpg";


if(move_uploaded_file($tmp_name,$filename)){
  $query = "UPDATE main SET image='$filename' , description='$content1' WHERE number='$id'";//업데이트 쿼리문
  mysqli_query($bd,$query) or die ("Error Querying database.");
  mysqli_close($bd);
  echo ("<meta http-equiv='Refresh' content='1;
         URL=manage_main.php'>");//read.php?id=$id
} else {
 echo "파일 업로드 실패 !! 다시 시도해주세요.<br />";
 echo ("<meta http-equiv='Refresh' content='1;
         URL=manage_main.php'>");//read.php?id=$id
}

?>
