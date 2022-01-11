<?php
$db_id = "root"; //db 아이디
$db_pw = "" ;  // db 비밀번호
$db_name ="test"; // db 이름
$db_domain="localhost"; // db 주소
$db=mysqli_connect($db_domain,$db_id,$db_pw,$db_name);

//if(mysqli_connect_error()){
//        echo("<br>");
//        echo("데이터베이스 접속 에러");
//    }else{
//    echo("<br>");
//    echo("데이터베이스 접속 성공");
//}


function mq($sql){
    global $db;
    return $db->query($sql);

}
?>