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
                width: 100%;
                margin-bottom: 15px;
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
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.php">LAILY</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="login.php">로그인</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="sign_up.php">회원가입</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="register.php">상품등록</a></li>


                        <!-- <form class="d-flex"> 카트
                            <button class="btn btn-outline-dark" type="submit">
                                <i class="bi-cart-fill me-1"></i>
                                Cart
                                <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                            </button>
                        </form> -->
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-laily py-5" >
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-black">
                    <h1 class="display-4 fw-bolder">LAILY</h1>
                    <p class="lead fw-normal text-black-50 mb-0">심플리 러블리 데일리는 레일리</p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5" >
            <h3 align="center">LOGIN</h3>
                <div class="regi" > 

                    
                    <form action="forms/insert.php" method="post" name="frm" enctype="multipart/form-data">
                        <h5>ID</h5>
                        <input name="id" placeholder="아이디를 입력하세요."><br>
                        <h5>PW</h5>
                        <input name="pw" type="password" placeholder="비밀번호를 입력하세요."><br>



                        <hr>
                       <div class="btn">
                           <button type="button" onclick="checkform()" >로그인</button>
                           <a href="sign_up.php"><button type="button">회원가입</button></a>
                        </div>

                    </form>
                    

                </div>
           
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark"  style="margin-top: 5%;">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>

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
