<?php


?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-4 px-lg-5">

        <a class="navbar-brand" href="\test\laily\index.php">LAILY</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <?php
                    $userid= '';
                    $username = '';
                    $role = "";
                    include "../main/config.php";
                    if(!$userid){


                ?>
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="/test/laily/index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="/test/list/list.php">Q&A</a></li>
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="/test/login/login.php">로그인</a></li>
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="/test/join/join.php">회원가입</a></li>
                    <?php
                        }else{
                        $logged = $username."(".$userid.")";

                    ?>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="/test/laily/index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="/test/list/list.php">Q&A</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="/test/laily/register.php">상품등록</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="/test/main/logout.php" >로그아웃</a></li>

                        <b><a class="nav-link active" id="welcome" style="text-align: right" ><?=$logged ?>님 환영합니다.</a> </b>
                    <?php
                        }
                    ?>
            </ul>


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
</nav>