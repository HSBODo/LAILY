<?php
   
    
    $connect = mysqli_connect("localhost","fxbin7713","77131548","laily"); 
                                //1.주소 2.아이디 3.비밀번호 4.접근할 데이터베이스명
    if(mysqli_connect_error()){
      
    }else{
       
        }

        $query = "select * from content order by no desc"; 

        $result = mysqli_query($connect,$query);
        
       
      
?>

