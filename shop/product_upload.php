<?php

include("config_getdata.php");

//확인이 필요 - 전부
if(!$_POST['product_id']) {
  echo("
    <script>
    window.alert('심각한 오류')
    history.go(-1)
    </script>
    ");
  exit;
}else{
    $product_id = $_POST['product_id'];
}

if(!$_POST['product_name']) {
  echo("
    <script>
    window.alert('상품 이름을 입력하세요')
    history.go(-1)
    </script>
    ");
  exit;
}else{
    $product_name = $_POST['product_name'];
}

if(!$_POST['product_price']) {
  echo("
    <script>
    window.alert('상품 가격을 입력하세요')
    history.go(-1)
    </script>
    ");
  exit;
}else{
    $product_price = $_POST['product_price'];
}

if(!$_POST['product_info']) {
  echo("
    <script>
    window.alert('상품 특징을 입력하세요')
    history.go(-1)
    </script>
    ");
  exit;
}else{
    $product_info = $_POST['product_info'];
}

if(!$_POST['product_from']) {
  echo("
    <script>
    window.alert('상품 원산지를 입력하세요')
    history.go(-1)
    </script>
    ");
  exit;
}else{
    $product_from = $_POST['product_from'];
}

if(!$_POST['product_weight']) {
  echo("
    <script>
    window.alert('상품 중량을 입력하세요')
    history.go(-1)
    </script>
    ");
  exit;
}else{
    $product_weight = $_POST['product_weight'];
}



if(!$_POST['product_intro']) {
  echo("
    <script>
    window.alert('소개를 입력하세요')
    history.go(-1)
    </script>
    ");
  exit;
}else{
    $product_intro = $_POST['product_intro'];
}

if(isset($_FILES['product_image']["name"])&&(!empty($_FILES["product_image"]))){
  $tmp_name = $_FILES['product_image']['tmp_name'];


  // $name = $_FILES['upload']["name"];
  // $Error = $_FILES['upload']['error'];
  // $uploadfile = $_FILES["upload"]["name"];
///////////////////오류처리 아직안함
}else{
    //비어있을경우
}

$path = "shop_data/01_product/";
$filename =  $path.$product_id.".jpg";

move_uploaded_file($tmp_name,$filename);
  // echo $filename;


  // echo $content1;
  // upload 는 -> name 으로 지정되어있다. upload php 로 sumbit 기능으로 받을 파일
   // tmp_name 은 이 파일의 temp 이름으로 다시 지정
 // echo "1. file name : {$_FILES['upload']['name']}<br />";
 // echo "4. temporary file name : {$_FILES['upload']['tmp_name']}<br />";

 // echo "파일이 업로드 되었습니다.<br />";
 // echo "<img src ={$_FILES['upload']['name']}> <p>";


//   $query = "UPDATE main SET image='$filename' , description='$content1' WHERE number='$id'";//업데이트 쿼리문
//   mysqli_query($bd,$query) or die ("Error Querying database.");
//   mysqli_close($bd);
//   echo ("<meta http-equiv='Refresh' content='1;
//          URL=manage_main.php'>");//read.php?id=$id
// } else {
//  echo "파일 업로드 실패 !! 다시 시도해주세요.<br />";
//  echo ("<meta http-equiv='Refresh' content='1;
//          URL=manage_main.php'>");//read.php?id=$id


// 전부다 확인절차 끝 - 이상없음
// upload 시작

$query = "INSERT INTO gunfish (product_id, product_name, product_image, product_price, product_info, product_from, product_weight, product_intro)
VALUES ('$product_id', '$product_name', '$filename' , '$product_price','$product_info','$product_from','$product_weight','$product_intro')";

if ($bd->query($query) === TRUE) {
    echo "New record created successfully";
    echo ("<meta http-equiv='Refresh' content='1;
       URL=manage_main.php'>");
} else {
    echo "Error: " . $sql . "<br>" . $bd->error;
}

$bd->close();

?>
