<?php

include("config_getdata.php");

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
if(!$_POST['category']) {
  echo("
    <script>
    window.alert('심각한 오류')
    history.go(-1)
    </script>
    ");
  exit;
}else{
    $category = $_POST['category'];
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

}else{
    //비어있을경우
}

$path = "shop_data/01_product/";
$filename =  $path.$product_id.".jpg";

move_uploaded_file($tmp_name,$filename);

// 전부다 확인절차 끝 - 이상없음
// upload 시작

 $query = "UPDATE gunfish SET product_name='$product_name',product_price='$product_price',product_info='$product_info',product_from='$product_from',product_weight='$product_weight', product_image='$filename' , product_intro='$product_intro' WHERE product_id='$product_id'";

if ($bd->query($query) === TRUE) {
    echo "New record updated successfully";
    echo ("<meta http-equiv='Refresh' content='0;
       URL=manage_list.php?category=$category'>");
} else {
    echo "Error: " . $query . "<br>" . $bd->error;
}

$bd->close();

?>
