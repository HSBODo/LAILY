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
        <link href="css/styles.css" rel="stylesheet" />

        <style>
            .regi{
                border: 2px solid black;
                margin: auto 30%;
                padding: 3% ;
                padding-left: 10%;
                padding-right: 10%;
            }
            .btn{
                width: 100%;
               align-content: center;
            }
            button{
                width: 30%;
                margin: 0 3%;
            }
            h5{margin-bottom: 2px; margin-top: 15px;}
            

            input{
                width: 100%;
            }
            #femail,#lemail{
               width: 174px;
            }

        </style>
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <?php
            include "../laily/common/nav.php"
            ?>
        </nav>
        <!-- Header-->
        <header class="bg-laily py-5" >
           <?php
            include "../laily/common/header.php"
           ?>
        </header>
        <!-- Section-->

        <div class="container" align="center" style="border: 2px solid ; margin-top: 5%;padding: 3%" >
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <div class="jumbotron" style="padding-top: 20px;">
                    <form name="join"  method="post" action="join_ok.php">
                        <h3 style="text-align: center">회원가입</h3>
                        <div class="col-lg-4"></div>
                        <div class="form-group">
                            <span style="text-align: left;">ID</span>
                            <input type="text" class="form-control" placeholder="아이디" name="id" id="id" maxlength="15">
                        </div>
                        <div class="form-group">
                            <span id="id_check_msg" data-check="0"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="비밀번호" name="pass" id="pass" maxlength="20">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="비밀번호 확인" name="pass_confirm" id="pass_confirm" maxlength="20">
                        </div>
                        <div class="form-group">
                            <span id="pass_check_msg" data-check="0"></span>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="이름" name="name" id="name" maxlength="20">
                        </div>
                        <div class="form-group" style="text-align: center">
                            <div class="btn-group" data-toggle="buttons">
                                <label class="btn btn-primary active">
                                    <input type="radio" name="gender" id="gender1" autocomplete="off" value="남자" checked>남자
                                </label>
                                <label class="btn btn-primary">
                                    <input type="radio" name="gender" id="gender2" autocomplete="off" value="여자">여자
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" placeholder="전화번호" name="phone" id="phone" maxlength="20">
                        </div>
                        <div class="col-lg-4"></div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="이메일" name="email" id="email" maxlength="80">
                        </div>

                        <span class="btn btn-primary form-control" onclick="check_input()">회원가입</span>&nbsp;
                        <span class="btn btn-primary form-control" onclick="reset_form()">초기화</span>

                    </form>
                </div>
            </div>
        </div>
        <!-- Footer-->
        <footer class="py-5 bg-dark"  style="margin-top: 5%;">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="../laily/js/scripts.js"></script>

        <script>
            function checkform(){
                let form = document.frm;
                let id = form.id.value;
                let pw = form.pw.value;
                let repw = form.repw.value;
                let phone = form.phone.value;
                let femail = form.femail.value;
                let lemail = form.lemail.value;
                let email ;
                if(femail&&lemail){
                    email =  femail+"@"+lemail;
                }
                let num_check=/^[0-9]*$/;

                console.log(id);
                console.log(pw);
                console.log(repw);
                console.log(phone);
                console.log(femail);
                console.log(lemail);
                console.log(phone);
                console.log(email);



                if(!id){
                    alert("ID를 입력하세요.");
                    form.id.focus();
                }else if(!pw){
                    alert("PW를 입력하세요.");
                    form.pw.focus();
                }else if(!repw){
                    alert("PW를 다시 입력하세요.")
                    form.repw.focus();
                }else if(!(pw==repw)){
                    alert("비밀번호가 일치하지 않습니다");

                }else if(!phone){
                    alert("전화번호를 입력하세요.");
                    form.phone.focus();
                }else if(!num_check.test(phone)){
                    alert("숫자만 입력하세요.");
                    form.phone.focus();
                }else if(!email){
                    alert("이메일을 입력하세요.")
                    form.femail.focus();
                }else{
                    form.submit();
                }


            }

        </script>
       
    </body>
</html>
