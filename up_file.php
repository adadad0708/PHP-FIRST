<?php
$fname = "v/".uniqid("yun_").".mp4";
 move_uploaded_file($_FILES['v_file']['tmp_name'], $fname);

$servername = "localhost";
$username = "www.jd.yu";
$password = "www.jd.yu";
$dbname = "www_jd_yu";
$conn = new mysqli($servername, $username, $password, $dbname);
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}

$sql = "INSERT INTO `yun_url`(`id`, `u_name`, `u_url`) VALUES (NULL, '".$_FILES['v_file']['name']."', '".$fname."');";
if ($conn->query($sql) === TRUE) {
    echo "上传成功";
    header("Refresh:2,url=admin.php");
    echo "新记录插入成功";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
