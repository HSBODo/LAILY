<?php
include "../dbcon/db_con.php";

$bno=$_POST['bno'];
$userpw =password_hash($_POST['dat_pw'],PASSWORD_DEFAULT);
$name = $_POST['dat_user'];
$content = $_POST['rep_con'];


mq("insert reply set con_num = '$bno',name='$name', pw='$userpw', content ='$content' ");

