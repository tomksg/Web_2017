<?php
echo "file upload program <br/>"; //br -> 다음줄
echo "select the file<br/>";
?>




<html>
<head></head>
<body>
	<form method ="post" action ="upload2.php" enctype="multipart/form-data">
		<input type="file" size=100 name="upload"><hr>  
		<!-- 여기서 name upload 가 이 파일의 temp 이름이다 -->
		<input type="submit" value="send">
	</form>
</body>
</html>
