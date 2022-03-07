<?php
session_start();
if(isset($_SESSION['login'])){
    unset($_SESSION['login']);
    echo "登录成功，退出";
    header("Refresh:2,url=admin.php");
}