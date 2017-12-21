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
// $row=mysqli_fetch_array($result);


    // 서버에 접근해서 지정된 카테고리의 아이디정보 이미지 삭제
    // echo "<meta http-equiv='refresh' content='0; url=manage_list.php'>"
    // 서버에서 파일삭제후 manage_list.php로 바로 리다이렉팅
echo "초기실행문 oK? total -> ";
echo $total_row;
echo "<br>current_row->";
echo $current_row;
// echo "자이제 와일문 들어갑니다 쿵쨕쨖 쿵쨕쨖";


// $result_product_id = mysqli_query($bd,"SELECT product_id FROM gunfish");
// $result_product_id_row=mysqli_fetch_row($result_product_id);
//product_id_row 를 통해 row를 불러올수있도록 지정

// $count = 0;
// while(!($total_row==$current_row)){


//   //  전체가 지워져버리는 linked list 가됨 결국 나는 절대값을 가지는 순서가 필요함을 인식함

//   $row = mysqli_fetch_array($result_product_id);
//   // echo "와일문 정상실행~";
//   $count= $count + 1;
//   $next_row = $current_row + 1;
//   echo '<br>array_row = ';
//   echo $result_product_id_row;
//   // $temp = $current_row-1;
//   $temp = array_search($current_row, $result_product_id_row)+1;
//   echo '<br>temp = ';
//   echo $temp;
//   echo '<br>temp2 =';
//   // $temp2 = $current_row;
//   $temp2 = array_search($current_row, $result_product_id_row)+2;
//   echo $temp2;
//   echo '<br>';

//   mysqli_query($bd,"UPDATE gunfish SET product_id='$temp2' WHERE product_id='$temp'");
//   $current_row= $current_row + 1;
//   // echo "count문 : ";
//   // echo $count;
//   // echo "<br>";
// }

// echo "자이제 시작이야~";
// echo "<br>";
// echo $next_row;
// echo "<br>";
// echo $current_row;
// echo "<br>";
// echo $total_row;
// echo "<br>";
// echo "자이제 끝이야~";
// 제일 첫번째로 밀린것 삭제 - 이것 을 current row 로 해버려서 망가질뻔
$query = "DELETE FROM gunfish WHERE product_id='$current_row'";
// mysqli_query($bd,$query);

if ($bd->query($query) === TRUE) {
    echo "record deleted successfully";
    echo ("<meta http-equiv='Refresh' content='10;
       URL=manage_list.php?category=$category'>");
} else {
    echo "Error: " . $query . "<br>" . $bd->error;
}






?>
