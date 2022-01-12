<!doctype html>
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

<style>

    h5{
        margin: 2px;
        margin-top: 5%;
        text-align: left;
    }
</style>


</head>
<body>
<?php
include "../laily/common/nav.php";
include "../laily/common/header.php";
?>



<div class="container" align="center"style="min-height: 400px;padding: 3%">
    <div class="col-lg-4"></div>
    <div class="col-lg-4">
        <div class="jumbotron" style="padding-top: 20px; border: 1px solid; margin: 5%; padding: 5%">
            <form name="loginSbmt" id="loginSbmt" method="post" action="login_ok.php">
                <h3 style="text-align: center">로그인</h3>
                <div class="col-lg-4"></div>
                <h5>ID</h5>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="아이디" name="id" maxlength="15">
                </div>
                <h5>비밀번호</h5>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="비밀번호" name="pass" maxlength="20">
                </div>
                <hr>
                <a href="#"><span class="btn btn-primary form-control" onclick="check_input()">로그인</span></a>
            </form>
        </div>
    </div>
</div>

<?php
    include "../laily/common/footer.php"
?>

<script src="../js/login.js"></script>

</body>
</html>