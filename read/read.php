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
include "../laily/common/header.php"
?>

<?php
include "../dbcon/db_con.php";
include "../write/login_check.php";
include "../main/config.php";
$bno = $_GET['idx'];
$sql = mq("select * from board where idx='$bno'");

$board = $sql->fetch_array();

$hit = mysqli_fetch_array(mq("select * from board where idx='$bno'"));

$hit = $hit['hit']+1;
mq(" update board set hit= '$hit' where idx ='$bno'
");
//print_r($board);
?>

<div class="container"  style="margin-top: 3%">
    <div id="board_read">
        <table class="table table-striped" style="text-align: center">
            <tr>
                <th colspan="2" style="background-color:#eeeeee;text-align: center "><?=$board['title']?></th>
            </tr>
            <tr>
                <td>글 제목</td>
                <td colspan="2"><?=$board['title']?></td>
            </tr>
            <tr>
                <td>작성자</td>
                <td colspan="2"><?=$board['name']?></td>
            </tr>
            <tr>
                <td>작성일</td>
                <td colspan="2"><?=$board['DATE']?></td>
            </tr>
            <tr>
                <td>내용</td>
                <td colspan="2" style="min-height: 200px; text-align: left"><?=$board['content']?></td>
            </tr>
        </table>

    </div>
    <a href="../list/list.php" class="btn btn-primary">목록</a>

    <?php
        if($username==$board['name']||$role=="ADMIN"){


    ?>
            <a href="../update/update.php?idx=<?=$board['idx']?>" class="btn btn-primary">수정</a>
            <a href="../delete/delete.php?idx=<?=$board['idx']?>" class="btn btn-primary">삭제</a>

    <?php
        }



    ?>
    <!-- 댓글 작성 폼-->
    <div class="dat_ins">
        <input type="hidden" name="bno" class="bno" value=<?=$board['idx']?>>
        <input type="hidden" name="dat_user" class="dat_user" id="dat_user" value=<?=$userid?>>
        <input type="password" name="dat_pw" class="dat_pw" size="15" placeholder="비밀번호">
        <div style="margin-top: 10px;">
            <textarea name="content" class="rep_con" id="rep_con" style="width: 90%; resize: none;"></textarea>
            <button id="rep_btn" class="rep_btn">댓글</button>
            
        </div>
    </div>
    <!-- 댓글 작성 폼 끝-->

    <!-- 댓글 목록 불러오기-->
    <div class="container">
        <div class="reply_view">
            <h3 style="padding: 10px 0 15px 0; border-bottom: solid 1px gray">댓글목록</h3>

            <?php
            include "../reply/reply_list.php";
            $rno = "";
            while ($reply=$sql_reply->fetch_array()){
            ?>
                <div class="dat_view">
                    <div><b><?=$reply['name']?></b></div>
                    <div class="dap_to comt_edit"><?php echo nl2br("$reply[content]");?></div>
                    <div class="rep_me dap_to"><?=$reply['DATE']?></div>
                    <div class="rep_me rep_menu" >
                        <a class="dat_del_btn" href="#">삭제</a>
                    </div>

                </div>
                <!-- 댓글 삭제 모달창-->
                <div class="modal fade" id="rep_modal_del">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <!-- (x)닫기 버튼-->
                                <button type="button" class="close" data-dismiss="modal">x</button>
                                <!-- header title-->
                                <h4 class="modal-title"><b>댓글 삭제</b></h4>

                            </div>
                            <!-- body-->
                            <div class="modal-body">
                                <form method="post" id="modal-form" action="../reply/reply_del.php">
                                    <input type="hidden" name="rno" id="rno" value="<?=$reply["idx"];?>">
                                    <input type="hidden" name="bno" value="<?=$bno?>">
                                    <p>비밀번호<input type="password" name="pw">
                                        <input type="submit" class="btn btn-primary" value="확인">
                                    </p>

                                </form>
                            </div>

                        </div>

                    </div>

                </div>

        <?php

        }

        ?>
            </div>

    </div>
    <!-- 댓글 목록 불러오기 끝-->



<!--   라이브리 시티 설치 코드
    <div id="lv-container" data-id="city" data-uid="MTAyMC81NTE3My8zMTY0MA==">
        <script type="text/javascript">
            (function(d, s) {
                var j, e = d.getElementsByTagName(s)[0];

                if (typeof LivereTower === 'function') { return; }

                j = d.createElement(s);
                j.src = 'https://cdn-city.livere.com/js/embed.dist.js';
                j.async = true;

                e.parentNode.insertBefore(j, e);
            })(document, 'script');
        </script>
        <noscript> 라이브리 댓글 작성을 위해 JavaScript를 활성화 해주세요</noscript>
    </div>
 시티 설치 코드 끝 -->
</div>
<?php
    include "../laily/common/footer.php";
?>

<script src="../reply/reply.js"></script>

</body>
</html>