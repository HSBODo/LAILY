<?php
?>

<nav class="navbar navbar-default">

    <div class="navbar-header">

        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                aria-expanded="false">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="../main/main.php">PHP 게시판 웹 사이트</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li><a href="../main/main.php">메인</a></li>
            <li><a href="../list/list.php">게시판</a></li>
        </ul>
        <?php
        $userid= '';
        $username = '';
        $role = "";
        include "../main/config.php";
        if(!$userid){


            ?>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                       aria-haspopup="true" aria-expanded="false">접속하기<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="../login/login.php">로그인</a></li>
                        <li><a href="../join/join.php">회원가입</a></li>
                    </ul>
                </li>
            </ul>


            <?php
        }else{
            $logged = $username."(".$userid.")";

            ?>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                       aria-haspopup="true" aria-expanded="false"><b><?=$logged ?>님의 회원관리</b><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="../main/logout.php">로그아웃</a></li>

                    </ul>
                </li>
            </ul>
            <?php
        }
        ?>
    </div>
</nav>
