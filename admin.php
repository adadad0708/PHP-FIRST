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
session_start();

if(isset($_SESSION['login']))
{
    echo '<div>
    <h1>文件上传</h1>
    <a href="logout.php">退出账号</a>

    <form action="up_file.php" method="post" enctype="multipart/form-data">
    <input type="file" name="v_file">
    <input type="submit" value="确定上传">
    </form>
</div>';
}
else{
   echo '  <div>
<form action="login.php" method="post">
<h1>用户登录</h1>    <label>用户名：
        <input type="input" name="u_user"/>
    </label>
    <label>密码
        <input type="input" name="u_password"/><br>
    </label>
    <input type="submit" name="" value="登录">
 </form>
</div>'
 ;
}
?>

</body>
</html>