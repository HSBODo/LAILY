<?php
include "../main/config.php";
include "../dbcon/db_con.php";

$rno = $_POST['rno'];
$bno = $_POST['bno'];



$reply_info = mq("select * from reply where idx='$rno'");

$reply = $reply_info->fetch_array();

$pwk= $_POST['pw']; // 모달에서 post로 받은 pw
$rpw = $reply['pw']; //db pw 해쉬값

print_r($pwk);
echo "<br>";
print_r($rpw);

if((password_verify($pwk,$rpw))&&($userid == $reply['NAME'])){
    $sql = mq("delete from reply where idx='$rno'");

    ?>
    <script>
        alert("댓글이 삭제 되었습니다.");

    </script>
    <meta http-equiv="refresh" content="0 url=/test/read/read.php?idx=<?=$bno?>">

<?php

}else{

    ?>
   <script>
        alert("본인의 댓글이 아니거나 비밀번호가 틀립니다.")
        history.back();
    </script>
<?php

}
    ?>



