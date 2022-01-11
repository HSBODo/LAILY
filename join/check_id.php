<?php
$db_id = "root"; //db 아이디
$db_pw = "" ;  // db 비밀번호
$db_name ="test"; // db 이름
$db_domain="localhost"; // db 주소
$db=mysqli_connect($db_domain,$db_id,$db_pw,$db_name);

!empty($_POST['id'])?$id=$_POST['id'] : $id="";
$ret['check'] = false;

if($id!=""){
    $sql="select id from user where id ='{$id}'";
    $result = mysqli_query($db,$sql);
    $num = mysqli_num_rows($result);



    if($num ==0){
        $ret['check']=true;
    }
}
echo json_encode($ret);

?>