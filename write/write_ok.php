<?php
include "../main/config.php";
include "../dbcon/db_con.php";


$name = $username;
$date = date("Y-m-d");
$userpw = password_hash($_POST['pw'],PASSWORD_DEFAULT);
$title = $_POST["title"];
$content = $_POST["content"];
$lock = $_POST["lockpost"];

mq("alter table board auto_increment =1");

mq("INSERT
        board
       SET
       name='$name',
       pw='$userpw',
       title='$title',
       content='$content',
       date ='$date',
       lock_post='$lock'
    
");
echo "<script>
    alert('글쓰기 완료되었습니다.');
    location.href='../list/list.php';
</script>";
