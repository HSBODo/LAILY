<!doctype html>
<html lang="ko">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>로그인</title>
</head>
<body>
<?php
include "../nav/nav.php"
?>



<div class="container">
    <div class="col-lg-4"></div>
    <div class="col-lg-4">
        <div class="jumbotron" style="padding-top: 20px;">
            <form name="loginSbmt" id="loginSbmt" method="post" action="login_ok.php">
                <h3 style="text-align: center">로그인 화면</h3>
                <div class="col-lg-4"></div>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="아이디" name="id" maxlength="15">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="비밀번호" name="pass" maxlength="20">
                </div>

                <a href="#"><span class="btn btn-primary form-control" onclick="check_input()">로그인</span></a>
            </form>
        </div>
    </div>
</div>

<script src="../js/login.js"></script>

</body>
</html>