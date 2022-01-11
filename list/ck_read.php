<?php
include "../dbcon/db_con.php";

$bno = $_GET['idx'];
$sql = mq(
    "select * from board where idx='$bno'"
);
$board = $sql ->fetch_array();

$bpw = $board['pw'];
if(isset($_POST['pw_chk'])){
    $pwk = $_POST['pw_chk'];
    if(password_verify($pwk,$bpw)){
        $pwk==$bpw;
        ?>
<script>
    location.href="../read/read.php?idx=<?=$board["idx"]?>";
</script>

<?php
    }else{
        ?>
        <script>
            alert("비밀번호가 틀립니다");
            location.href="../list/list.php"
        </script>

<?php
    }
}
?>