<!DOCTYPE html>
<html lang="ko">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>게시판</title>
</head>
<body>
<?php
include "../nav/nav.php"
?>


<div class="container">
    <div id="board_area">
        <?php
            include "../search/search.php";

            if ($category == "title"){
                $keyword = "제목";
            }else if ($category == "name"){
                $keyword = "글쓴이";
            }else{
                $keyword = "내용";
            }


        ?>

        <h1>'<?=$keyword?>' 에서 '<b><?=$search?></b>' 검색결과</h1><br>
            <h4>는 다음과 같습니다</h4><br>
                <table class="table table-striped" style="text-align: center; border: 1px solid #ddddda">
                    <tr>
                        <th style="background-color:#eeeeee; text-align: center ">번호</th>
                        <th style="background-color:#eeeeee; text-align: center ">제목</th>
                        <th style="background-color:#eeeeee; text-align: center ">작성자</th>
                        <th style="background-color:#eeeeee; text-align: center ">작성일</th>
                        <th style="background-color:#eeeeee; text-align: center ">조회수</th>


                    </tr>

                    <?php

                    if(isset($_GET["page"])){
                        $page = $_GET["page"];
                    }else{
                        $page=1;
                    }


                    $sql =mq("select * from board where  $category like  '%{$search}%' order by idx desc");
                    $total_record = mysqli_num_rows($sql);
                    $list = 5;
                    $block_cnt =5;
                    $block_num = ceil($page / $block_cnt);

                    $block_start = (($block_num - 1 )* $block_cnt) + 1 ;
                    $block_end = $block_start + $block_cnt-1;

                    $total_page = ceil($total_record / $list);
                    if($block_end>$total_record){
                        $block_end=$total_page;
                    }
                    $total_block = ceil($total_page/$block_cnt);
                    $page_start = ($page-1)*$list;





                    //게시글 가져오기

                    $sql2 = mq("select * from board where $category like '%{$search}%' order by idx desc limit $page_start,$list");



                    while ($board= $sql2->fetch_array()) {
                        $title = $board["title"];
                        if (strlen($title) > 30) {
                            $title = str_replace($board["title"], mb_stbstr($board["title"], 0, 30, "utf-8") . "...", $board["title"]);
                        }
                           // print_r($board);



                        ?>


                    <tr>
                        <td width="70"><?=$board['idx']; ?></td>
                        <td width="500">
                        <?php

                         $lockimg = "<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTgs0b3yjdD_CJ9c4hiWYYyTW6RvDPvdHJfDQ&usqp=CAU' alt='lock' title='lock' width='18' height='18'>";
                        if($board['LOCK_post']==1){


                        ?>
                        <span class="lock_check" style="cursor: pointer" data-idx="<?=$board['idx']?>"><?=$title?><?=$lockimg?></span>

                        <?php
                        }else{
                        ?>
                       <span class="read_check" style="cursor: pointer" data-action="/test/read/read.php?idx=<?=$board['idx']?>">
                                <?=$title?></span>

                        <?php
                        }
                        ?>

                        </td>
                        <td width="120"><?=$board['name'];?></td>
                        <td width="100"><?=$board['DATE'];?></td>
                        <td width="100"><?=$board['hit'];?></td>


                    </tr>
                        <?php }?>

                </table>

    </div>
    <div class="modal fade" id="modal_div">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">x</button>
                    <h4 class="modal-title"><b>비밀글 입니다.</b></h4>
                </div>
                <div class="modal-body">
                    <form method="post" id="modal_form" action="ck_read.php?idx=" data-action="ck_read.php?idx=">
                        <p>비밀번호
                            <input type="password" name="pw_chk">  <input type="submit" class="btn btn-primary" value="확인">
                        </p>

                    </form>
                </div>
            </div>

        </div>


    </div>
    <script>
        //비밀글 클릭시 모달창
        $(function (){
            $(".lock_check").click(function (){
                $("#modal_div").modal();
                let action_url = $("#modal_form").attr("data-action")+$(this).attr("data-idx");
                $("#modal_form").attr("action",action_url);

            })
        })
        //공개글 클릭시
        // $(function (){
        //     $(".read_check").click(function (){
        //         let action_url = $(this).attr("data-action");
        //         $(location).attr("href",action_url);
        //     })
        // })

        </script>




<div id="page_num" style="text-align: center">
<?php
//    print_r("total:  ".$total_record);
//    echo "<br>";
//    print_r("list:  ".$list);
//    echo "<br>";
//    print_r("cnt:  ".$block_cnt);
//    echo "<br>";
//    print_r("num:   ".$block_num);
//    echo "<br>";
//    print_r("start:  ".$block_start);
//    echo "<br>";
//    print_r("end:   ".$block_end);
//    echo "<br>";
//    print_r("total page:  ".$total_page);
//    echo "<br>";
//    print_r("total block:  ".$total_block);
//    echo "<br>";
//    print_r("page start:  ".$page_start);
//    echo "<br>";
//    print_r("page:   ".$page);
//echo "<br>";

        if ($page<=1){
            //빈값
        }else{
            echo "<a href='list.php?page=1'>처음</a>";
        }
        if ($page <=1){
            //빈값
        }else{
            $pre = $page-1;
            echo "<a href='list.php?page=$pre'> ◀이전 </a>";
        }

        for($i = $block_start;$i<=$total_page; $i++){
            if($page==$i){
                echo "<b>$i</b>";
            }else{
                echo "<a href='list.php?page=$i'>$i</a>";
            }
        }

        if($page>=$total_page){
            //빈값
        }else{
            $next = $page+1;
            echo "<a href='list.php?page=$next'>다음▶ </a>";
        }

        if ($page>=$total_page){

        }else{
            $next= $page+1;
            echo "<a href='list.php?page=$total_page'>마지막</a>";
        }

    ?>


</div>

<div id="write_btn">
        <a href="../write/write.php"><button class="btn btn-primary pull-right">글쓰기</button></a>
    </div>
<br><br><br>
<div id="search_box" style="text-align: center">
    <form action="search_result.php" method="get">
        <select>
            <option value="title">제목</option>
            <option value="name">글쓴이</option>
            <option value="content">내용</option>
        </select>
        <input type="text" name="search" size="40" required="required">
        <button class="btn btn-primary">검색</button>
    </form>

</div>
</div>
<script>
    $(function (){
       $(".read_check").click(function (){
           let action_url = $(this).attr("data-action");
           $(location).attr("href",action_url);
       }) ;
    });

</script>


</body>
</html>