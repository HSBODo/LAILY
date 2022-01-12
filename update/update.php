<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>LAILY</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="https://shop-phinf.pstatic.net/20210901_50/1630475975899wacOO_JPEG/31611874611157425_258975115.jpg?type=m120" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../laily/css/styles.css" rel="stylesheet" />

    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="../reply/reply.css" rel="stylesheet"/>
</head>
<body>
<?php
include "../laily/common/nav.php";
include "../laily/common/header.php";
?>


<?php
include "../dbcon/db_con.php";
include "../write/login_check.php";
$bno = $_GET['idx'];
$sql = mq("select * from board where idx='$bno'");

$board = $sql->fetch_array();


//print_r($board);
?>

<div class="container" style="margin-top: 5%">
    <div id="board_read">
        <form action="../update/update_ok.php"method="post">
        <input type="hidden" name="idx" value="<?=$bno ?>">
        <table class="table table-striped" style="text-align: center">
            <tr>
                <th colspan="2" style="background-color:#eeeeee;text-align: center "><?=$board['title']?></th>
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
<?php
    include "../laily/common/footer.php";
?>


</body>
</html>