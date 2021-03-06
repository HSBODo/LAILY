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



    <style>
        a{color: black;}
        h5{
            margin: 2px;
            margin-top: 5%;
           text-align: left;
        }
        .gen{
            margin: 2px;
            margin-top: 5%;
            text-align: center;
        }

    </style>

</head>
<body>

    <?php
    include "../laily/common/nav.php"
    ?>


    <?php
    include "../laily/common/header.php"
    ?>


<div class="container" style="border: 2px solid;margin-top: 5%; padding: 3%; " align="center">
    <div class="col-lg-4"></div>
    <div class="col-lg-4">
        <h3 style="text-align: center">회원가입</h3>
        <div class="jumbotron" style="padding-top: 20px; border: 1px solid; padding: 15px; ">
            <form name="join"  method="post" action="join_ok.php">

                <div class="col-lg-4"></div>
                <h5>ID</h5>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="아이디" name="id" id="id" maxlength="15">
                </div>
                <div class="form-group">
                    <span id="id_check_msg" data-check="0"></span>
                </div>
                <h5>비밀번호</h5>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="비밀번호" name="pass" id="pass" maxlength="20">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="비밀번호 확인" name="pass_confirm" id="pass_confirm" maxlength="20">
                </div>
                <div class="form-group">
                    <span id="pass_check_msg" data-check="0"></span>
                </div>
                <h5>이름</h5>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="이름" name="name" id="name" maxlength="20">
                </div>
                <h5>전화번호</h5>
                <div class="form-group">
                    <input type="tel" class="form-control" placeholder="전화번호" name="phone" id="phone" maxlength="20">
                </div>
                <div class="col-lg-4"></div>
                <h5>이메일</h5>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="이메일" name="email" id="email" maxlength="80">
                </div>
                <h5 class="gen">성별</h5>
                <div class="form-group">
                    <div class="btn-group" data-toggle="buttons">
                        <label class="btn btn-primary active">
                            <input type="radio"   name="gender" id="gender1" autocomplete="off" value="남자" checked>남자
                        </label>
                        <label class="btn btn-primary">
                            <input type="radio" name="gender" id="gender2" autocomplete="off" value="여자">여자
                        </label>
                    </div>
                </div>
                <hr>
                <br>

                <span class="btn btn-primary form-control" onclick="check_input()">회원가입</span>&nbsp;
                <span class="btn btn-primary form-control" onclick="reset_form()">초기화</span>

            </form>
        </div>
    </div>
</div>
<?php
    include "../laily/common/footer.php";
?>


<script>


    $(function(){
        $("#id").blur(function(){
            if($(this).val()==""){
                $("#id_check_msg").html("아이디를 입력하세요.").css("color","red").attr("data-check","0");
                $(this).focus();
            }else{
                checkIdAjax();
            }
        });
    });

    $(function(){
        $("#pass_confirm").blur(function(){
            if( $(this).val()!=$("#pass").val() ) {
                $("#pass_check_msg").html("비밀번호가 일치하지 않습니다.").css("color","red");
            }else if( ($("#this").val()=="") || ($("#pass").val()=="") ){
                $("#pass_check_msg").html("비밀번호를 입력하세요.").css("color","red");
            }else{
                $("#pass_check_msg").html("비밀번호가 일치합니다.").css("color","blue");
            }
        });
    });


    function checkIdAjax(){
        $.ajax({
            url : "/test/join/check_id.php",
            type : "post",
            dataType : "json",
            data : {
                "id" : $("#id").val()
            },
            success : function(data){
                if(data.check){

                    $("#id_check_msg").html("사용 가능한 아이디입니다.").css("color", "blue").attr("data-check","1");
                }else{

                    $("#id_check_msg").html("중복된 아이디입니다.").css("color", "red").attr("data-check","0");
                    $("#id").focus();
                }
            }
        });
    }

    function check_input()
    {
        if (!$("#id").val()) {
            alert("아이디를 입력하세요!");
            $("#id").focus();
            return;
        }

        if (!$("#pass").val()) {
            alert("비밀번호를 입력하세요!");
            $("#pass").val().focus();
            return;
        }

        if (!$("#pass_confirm").val()) {
            alert("비밀번호확인을 입력하세요!");
            $("#pass_confirm").focus();
            return;
        }

        if (!$("#name").val()) {
            alert("이름을 입력하세요!");
            $("#name").focus();
            return;
        }

        if (!$("#phone").val()) {
            alert("전화번호를 입력하세요!");
            $("#phone").focus();
            return;
        }

        if (!$("#email").val()) {
            alert("이메일 주소를 입력하세요!");
            $("#email").focus();
            return;
        }

        if ( $("#pass").val() !=
            $("#pass_confirm").val()) {
            alert("비밀번호가 일치하지 않습니다.\n다시 입력해 주세요!");
            $("#pass").focus();
            $("#pass").select();
            return;
        }

        document.join.submit();
    }

    function reset_form() {
        document.join.id.value = "";
        document.join.pass.value = "";
        document.join.pass_confirm.value = "";
        document.join.name.value = "";
        document.join.gender.value = "";
        document.join.phone.value = "";
        document.join.email.value = "";
        document.join.id.focus();
        return;
    }
</script>
</body>
</html>