<?php
include "../main/config.php";
include "../dbcon/db_con.php";
$bno= $_POST['idx'];
$pw = password_hash($_POST['pw'],PASSWORD_DEFAULT);
$date = date('Y-m-d');
$title = $_POST['title'];
$content = $_POST['content'];
print_r($bno);
print_r($pw);
print_r($title);
print_r($content);
print_r($date);


mq("
    UPDATE `test`.`board` SET  `pw`='$pw', `title`='$title', `content`='$content', `DATE`='$date' WHERE  `idx`='$bno';
                     
                     
");
?>
<script>
    alert("수정되었습니다.")


</script>
<meta http-equiv="refresh" content="0 url=/test/read/read.php?idx=<?=$bno?>">
