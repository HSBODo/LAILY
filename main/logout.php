<?php
    session_start();
    unset($_SESSION["userid"]);
    unset($_SESSION["username"]);
    unset($_SESSION["role"]);

    echo "<script>
        alert('로그아웃 했습니다.');
        location.href = '../laily/index.php';
    
</script>";