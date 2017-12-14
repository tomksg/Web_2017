<?
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "kimsung00";
$mysql_database = "test_db"; //db 명 입력

$bd = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password) or die("db connect error");

mysqli_select_db($bd, $mysql_database) or die("db connect error");



// 가지고 올 정보
    // 게시물 번호 - product_id int 11
    // 상품명  - product_name varchar 20
    // 상품 이미지 파일 product_image mediumblob
    // 가격 product_price int 20
    // 제품특징 product_info text
    // 원산지 product_from varchar 20
    // 중량 product_weight float
    // 소개 product_intro text


?>
