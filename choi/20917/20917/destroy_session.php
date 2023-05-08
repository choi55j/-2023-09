<?php
    session_start();

    // 세션 접속 끊기
    if(isset($_SESSION["username"])){
        unset($_SESSION["usrename"]);
    }

    echo "세션 접속 해제";
?>