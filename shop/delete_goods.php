<?php

include('lock.php');
include("config_getdata.php");

// 총 게시물 수 를 구한다.
$result_count=mysqli_query($bd,"SELECT count(*) FROM gunfish");
$result_row=mysqli_fetch_row($result_count);
$total_row = $result_row[0];

$product_id = $_GET['product_id'];
//결과의 첫번째 열이 count(*) 의 결과다.
//mysql_fetch_row 쓰면 $result_row[0] 처럼 숫자를 써서 접근을 해야한다.
$category = $_GET['category'];
$result = mysqli_query($bd,"SELECT product_id FROM gunfish WHERE product_id='$product_id'");
$current_row1 = mysqli_fetch_row($result);
$current_row = $current_row1[0];

$result2 = mysqli_query($bd,"SELECT category FROM gunfish WHERE category='$category'");
$cur_category= mysqli_fetch_row($result2);
$category = $cur_category[0];

    // 서버에 접근해서 지정된 카테고리의 아이디정보 이미지 삭제
  
    // 서버에서 파일삭제후 manage_list.php로 바로 리다이렉팅
echo "초기실행문 oK? total -> ";
echo $total_row;
echo "<br>current_row->";
echo $current_row;

$query = "DELETE FROM gunfish WHERE product_id='$current_row'";

if ($bd->query($query) === TRUE) {
    echo "record deleted successfully";
    echo ("<meta http-equiv='Refresh' content='10;
       URL=manage_list.php?category=$category'>");
} else {
    echo "Error: " . $query . "<br>" . $bd->error;
}

?>
