<?php
    session_start();

    if(isset($_SESSION['isLoginOK'])){
        unset($_SESSION['isLoginOK']);
        header("location:khampha.php");
    }

?>