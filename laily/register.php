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
            
            .frm input{width: 100%;}

            input{
                width: 100%;
            }

        </style>
    </head>
    <body>
        <!-- Navigation-->

        <?php
            include "../laily/common/nav.php";
            include "../laily/common/header.php";
        ?>
        <!-- Header-->

        <!-- Section-->
        <section class="py-5" >
                <h2 align="center">상품등록</h2>
                <div class="regi" > 


                    <form action="forms/insert.php" method="post" name="frm" enctype="multipart/form-data">
                       <h5>상품명</h5>
                       <input name="name" placeholder="상품명을 입력하세요."><br>
                       <h5>가격</h5>
                       <input name="price" placeholder="가격을 입력하세요."><br>
                       <h5>링크</h5>
                       <input name="link" placeholder="링크를 입력하세요."><br>
                       <h5>사진</h5>
                       <input type="file" name="photo" >
                        <hr>
                       <div class="btn">
                           <button class="btn-primary" type="button" onclick="checkform()" >등록</button>
                           <a href="index.php"><button class="btn-primary" type="button" >취소</button></a>
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
                let title = form.name.value;
                let price = form.price.value;
                let link = form.link.value;
                let photo = form.photo.value;

                let num_check=/^[0-9]*$/;
                console.log(title);
                console.log(price);
                console.log(link);
                console.log(photo);

                if(!title){
                    alert("상품명을 입력하세요.");
                    form.name.focus();
                }else if(!price){
                    alert("가격을 입력하세요.");
                    form.price.focus();
                }else if(!num_check.test(price)){
                    alert("숫자만 입력하세요.")
                    form.price.focus();
                }else if(!link){
                    alert("링크를 입력하세요.");
                    form.link.focus();
                }else if(!photo){
                    alert("사진을 선택하세요.")
                    form.photo.focus();
                }else{
                    form.submit();
                }


            }

        </script>
       
    </body>
</html>
