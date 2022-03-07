<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "www.jd.yu";
$password = "www.jd.yu";
$dbname = "www_jd_yu";

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}

$sql = "SELECT * FROM `yun_url`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
        echo "<h3>".$row['u_name']."</h3>";
        echo "<video src='".$row['u_url']."' controls='controls' style='width:400px;height:300px;'></video>";
    }
} else {
    echo "0 结果";
}
$conn->close();
?>
<!--<video src="v/yun_6224a7f502d6d.mp4" controls="controls" style="width:400px;height:300px;"></video>-->
</body>
</html>


