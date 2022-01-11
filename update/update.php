<!DOCTYPE html>
<html lang="ko">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>글쓰기</title>
</head>
<body>
<?php
include "../nav/nav.php"
?>


<?php
include "../dbcon/db_con.php";
include "../write/login_check.php";
$bno = $_GET['idx'];
$sql = mq("select * from board where idx='$bno'");

$board = $sql->fetch_array();


//print_r($board);
?>

<div class="container" >
    <div id="board_read">
        <form action="../update/update_ok.php"method="post">
        <input type="hidden" name="idx" value="<?=$bno ?>">
        <table class="table table-striped" style="text-align: center">
            <tr>
                <th colspan="2" style="background-color:#eeeeee;text-align: center ">게시판 글수정</th>
            </tr>
            <tr>
                <td>
                    <span class="pull-left">&nbsp;&nbsp;&nbsp;아이디:<b><?=$userid?></b></span>
                </td>
            </tr>
            <tr>

                <td colspan="2"><input type="text" class="form-control"placeholder="글제목" name="title" id="utitle" value="<?=$board['title']?>" required></td>
            </tr>
            <tr>
                <td colspan="2"><input type="password" class="form-control" placeholder="글 비밀번호" name="pw" id="upw" style="width: 150px"></td>
            </tr>
            <tr>

                <td colspan="2"><textarea class="form-control" placeholder="글 내용" name="content" id="ucontent" style="height: 350px" required><?=$board['content']?></textarea></td>
            </tr>

        </table>
            <a href="../list/list.php" class="btn btn-primary">목록</a>
            <button type="submit" class="btn btn-primary">글쓰기</button>
        </form>
    </div>


</div>


</body>
</html>