<?php

include "../main/config.php";
include "../dbcon/db_con.php";
include "../write/login_check.php";

$bno = $_GET['idx'];
$sql = mq("select * from board where idx='$bno'");

$board = $sql->fetch_array();
print_r($board);