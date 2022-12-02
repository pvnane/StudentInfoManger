
<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$tab = "mystudent";

// 创建连接

$con = new mysqli($servername, $username, $password,$tab);
mysqli_query($con,"set names utf8");
// 检测连接
if ($con->connect_error) {
    die("连接失败: " . $con->connect_error);
}
?>




