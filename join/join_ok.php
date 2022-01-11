<?php

if(mysqli_connect_error()){
        echo("<br>");
        echo("데이터베이스 접속 에러");
}else{
    echo("<br>");
    echo("데이터베이스 접속 성공");
 }
$id = $_POST['id'];
$pass = password_hash($_POST['pass'],PASSWORD_DEFAULT);
$name = $_POST['name'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$email = $_POST['email'];

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
mq("INSERT
        USER
       SET
       ID='$id',
       PASS='$pass',
       NAME='$name',
       gender='$gender',
       phone ='$phone',
       email = '$email'
       
");
echo "
<script>
    alert('회원가입이 완료 되었습니다.');
    location.href='../login/login.php';

</script>
";

