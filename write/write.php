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


<div class="container" >
        <div id="board_write">
            <form action="write_ok.php" method="post">
                <table class="table table-striped" style="text-align: center"; >
                    <tr>
                        <th colspan="2" style="background-color: #eeeeee; text-align: center"><h3>게시판 글쓰기</h3></th>
                    </tr>
                    <tr>
                        <td><sapn class="pull-left">&nbsp;&nbsp;&nbsp;아이디:<b><?=$userid?></b></sapn></td>
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control" placeholder="글제목" name="title" id="utitle" required></td>
                    </tr>
                    <tr>
                        <td><input type="password" class="form-control" placeholder="글 비밀번호" name="pw" id="upw" style="width: 150px"></td>
                    </tr>
                    <tr>
                        <td><textarea class="form-control" placeholder="글내용" name="content" id="ucontent" style="height: 350px" required></textarea></td>
                    </tr>


                </table>
                <input type="checkbox" value="1" name="lockpost">비밀글<br><br>
                <button type="submit" class="btn btn-primary">글쓰기</button>

            </form>
            <hr>
        </div>
</div>


</body>
</html>