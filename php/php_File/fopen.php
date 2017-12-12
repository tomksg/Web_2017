<?php
echo "fopen fclose 사용 <br/>";
//fopen("window 경로 c:/apm_setup/htdocs/test.txt","r")
//fopen("http 서버에서의 경로 http://david.mycamp.kr/","r")

//
$fn = "test.txt";
echo "읽을파일 : $fn <br/>";
if(file_exists($fn)){
	$fp =fopen($fn,"r");

	$content = fread($fp,filesize($fn)); // 파일포인터 , 읽을 크기
	//나중에 파일 사이즈를 사용할려고한다면 $file_size = filesize($fn) 을 쓰도록하자
	$content = str_replace("a","bbbbbb<br/>",$content);
	//$content = str_replace("a","bbbbbb<br/>",$content);
	//인자 1 이 있는곳에 인자 2 를 삽입하라 인자 3은 대상체

	echo $content;
	echo "<br/>";

	fclose($fp);
}else{
	echo "there is no file<br/>";
	exit;
}

/*a 파일을 b 파일에 옮기기*/
$fw = fopen("test2.txt","a");
fwrite($fw,$content);
fclose($fw);
if($fw==null){

	echo "filewrite done<br/>";

}


//모드에는 r w(파일존재시 reset 후 파일생성) a(쓰고 파일존재시 덧붙여쓰기 add) r+ w+ a+ (파일 읽고 쓰기전용 w 와 a 는 특성같음)


$fp = fopen("15556646_4pJx0_1507720936.gif","r");/*filename, mode  이고 같은 경로기에 그대로*/

//이미지 파일 부르기
if($fp == null){
	echo "파일이없습니다.<br/>";
}else{
	echo "파일을 열었습니다.<br/>"; 
	// echo "$"
	echo "<img src='15556646_4pJx0_1507720936.gif'<br/>";/*안에는 원하는 파일*/
	fclose($fp); //항상 닫아주도록 할것 
}
