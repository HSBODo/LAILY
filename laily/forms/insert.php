<?php
    $now =date("Ymd_His");
    $title = $_POST["name"];
    $price = $_POST["price"];
    $link = $_POST["link"];
    $photo = $now."_".$_FILES["photo"]["name"];
    	
    // Array
    // (
    //     [name] => 4.jpg
    //     [full_path] => 4.jpg
    //     [type] => image/jpeg
    //     [tmp_name] => C:\xampp\tmp\phpD1C6.tmp  //실제 파일
    //     [error] => 0
    //     [size] => 5222943
    // )

    $regdate = date("Y-m-d");

  

    echo "title: ",$title;
    echo "<br>";

    echo "price: ",$price;
    echo "<br>";
    echo "photo: ",$photo;
    echo "<br>";
    echo "regdate: ",$regdate;
    echo "<br>";
    echo "regdate: ",$now;
    echo "<br>";
    echo "link: ",$link;

    move_uploaded_file($_FILES['photo']['tmp_name'],"C:/xampp/htdocs/laily/upload/".$now."_".$_FILES["photo"]["name"]);















    $connect = mysqli_connect("localhost","fxbin7713","77131548","laily"); 
                                //1.주소 2.아이디 3.비밀번호 4.접근할 데이터베이스명
    if(mysqli_connect_error()){
        echo("<br>");
        echo("데이터베이스 접속 에러");
    }else{
        echo("<br>");
        echo("데이터베이스 접속 성공");
        }

        $query = "insert into content(title,price,regdate,photo,link) values('$title','$price','$regdate','$photo','$link')"; 
        mysqli_query($connect,$query);



      
?>

<script>
    location.href="http://127.0.0.1/hsb/index.php"
    
</script>