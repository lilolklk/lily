<?php
    header ( "Content-type:text/html;charset=utf-8" );
    $conn = mysqli_connect('localhost','root','123456','shop2') or die('数据库连接失败');
    $conn->set_charset('utf8');

    $user = $_POST['user'];
    $password = $_POST['password'];
    $Email = $_POST['Email'];
 	
    $sql = "INSERT INTO users(id,user,password,Email) 
    			VALUES (null,'{$user}' ,'{$password}','{$Email}')";
    mysqli_query($conn,$sql) or die(mysqli_error($conn));
    echo("注册成功！！！<br/><a href='login.html'>点击登录</a>")     
?>
