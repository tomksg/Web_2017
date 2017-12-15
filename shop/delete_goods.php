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

$result = mysqli_query($bd,"SELECT product_id FROM gunfish WHERE product_id='$product_id'");
$current_row = mysqli_fetch($result);


// $row=mysqli_fetch_array($result);


    // 서버에 접근해서 지정된 카테고리의 아이디정보 이미지 삭제
    // echo "<meta http-equiv='refresh' content='0; url=manage_list.php'>"
    // 서버에서 파일삭제후 manage_list.php로 바로 리다이렉팅
while(!$total_row==$current_row){
  $next_row = $current_row + 1;
  mysqli_query($bd,"UPDATE gunfish SET product_id='$next_row' WHERE product_id='$product_id'");
  $current_row= $current_row + 1;
}
$query = "DELETE FROM gunfish WHERE product_id='$current_row";
// mysqli_query($bd,$query);

if ($bd->query($query) === TRUE) {
    echo "record deleted successfully";
    echo ("<meta http-equiv='Refresh' content='1;
       URL=manage_list.php'>");
} else {
    echo "Error: " . $query . "<br>" . $bd->error;
}






?>
