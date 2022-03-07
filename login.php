<?php
$u= $_POST['u_user'];
$p = $_POST['u_password'];
$servername = "localhost";
$username = "www.jd.yu";
$password = "www.jd.yu";
$dbname = "www_jd_yu";


// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);

// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
$conn = new mysqli($servername, $username, $password, $dbname);
$sql="SELECT * FROM `yun_adminn` WHERE `u_user` = '".$u."' AND `u_password` = '".$p."'";
$result = $conn->query($sql);
// 检测连接
if ($result->num_rows > 0) {
// 输出数据
session_start();
$_SESSION['login']=true;
        header("Refresh:2,url=admin.php");

} else {
    session_start();

    $_SESSION['login']=false;
    echo"登录失败";
    header("Refresh:2,url=admin.php");
}
$conn->close();
?>