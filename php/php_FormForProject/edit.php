<!-- 이것은 edit을위한 폼일뿐 php에 속지말고 html이라고 생각하고 넘어갈것 -->




<html>
<head>
<title>게시판</title>
<style>
<!--
td { font-size : 9pt; }
A:link { font : 9pt; color : black; text-decoration : none; 
font-family: 굴림; font-size : 9pt; }
A:visited { text-decoration : none; color : black; 
font-size : 9pt; }
A:hover { text-decoration : underline; color : black; 
font-size : 9pt;}
-->
</style>
</head>

<body topmargin=0 leftmargin=0 text=#464646>
<center>
<BR>
<!-- 입력된 값을 다음 페이지로 넘기기 위해 FORM을 만든다. -->
<form action=update.php?id=<?=$_GET[id]?> method=post>

<!-- update.php ? id d= get으로 받은 id 값  -->

<table width=580 border=0 cellpadding=2 cellspacing=1 bgcolor=#777777>
    <tr>
        <td height=20 align=center bgcolor=#999999>
            <font color=white><B>글 수 정 하 기</B></font>
        </td>
    </tr>
<?
    //데이터 베이스 연결하기
    include "db_info.php";
    $id = $_GET[id];
    $no = $_GET[no];

    // 먼저 쓴 글의 정보를 가져온다.
    $result=mysql_query("SELECT * FROM board WHERE id=$id", $conn);
    $row=mysql_fetch_array($result);
?>
<!-- 입력 부분 -->
    <tr>
        <td bgcolor=white>&nbsp;
        <table>
            <tr>
                <td width=60 align=left >이름</td>
                <td align=left >
                    <INPUT type=text name=name size=20 
                    value="<?=$row[name]?>">

                    <!-- 여기서 row를통해 name 을 뽑아온다 -->
                

                </td>
            </tr>
            <tr>
                <td width=60 align=left >이메일</td>
                <td align=left >
                    <INPUT type=text name=email size=20 
                    value="<?=$row[email]?>">
                </td>
            </tr>
            <tr>
                <td width=60 align=left >비밀번호</td>
                <td align=left >
                    <INPUT type=password name=pass size=8> 
                    (비밀번호가 맞아야 수정가능)
                </td>
            </tr>
            <tr>
                <td width=60 align=left >제 목</td>
                <td align=left >
                    <INPUT type=text name=title size=60 
                    value="<?=$row[title]?>">
                </td>
            </tr>
            <tr>
                <td width=60 align=left >내용</td>
                <td align=left >
                    <TEXTAREA name=content cols=65 rows=15><?=$row[content]?></TEXTAREA>
                </td>
            </tr>
            <tr>
                <td colspan=10 align=center>
                    <INPUT type=submit value="글 저장하기">
                    &nbsp;&nbsp;
                    <INPUT type=reset value="다시 쓰기">
                    &nbsp;&nbsp;
                    <INPUT type=button value="되돌아가기" 
                    onclick="history.back(-1)">
                </td>
            </tr>
            </TABLE>
        </td>
    </tr>
<!-- 입력 부분 끝 -->
</table>
</form>
</center>
</body>
</html>
