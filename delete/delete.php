<?php
include "../dbcon/db_con.php";
$bno=$_GET['idx'];
$bnos=$_POST["bnos"];

if(isset($bno)){


    mq(
        "delete from board where idx='$bno'"
    );
    mq("
            delete from reply where con_num='$bno'
    ");

}elseif (isset($bnos)){
    for ($i=0;$i<count($bnos);$i++){
        mq(
            "delete from board where idx='$bnos[$i]'"
        );
        mq("
            delete from reply where con_num='$bnos[$i]'
    ");
    }



}


?>
<script>
    alert("삭제되었습니다.");

</script>

<meta http-equiv="refresh" content="0 url=/test/list/list.php">
