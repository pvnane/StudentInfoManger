    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>无标题文档</title>
    </head>

    <body>
    <?php
    session_start();


    $userName='root';
    $passWord='1234';
    $host='localhost';
    $dataBase='mystudent';

    $conn=mysqli_connect($host,$userName,$passWord,$dataBase);
    mysqli_query($conn,"set names utf8");
    $name=$_POST['username'];
    $pwd=$_POST['password'];
    $sql="select Adminname,password from admin where Adminname='$name' AND password='$pwd';";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_num_rows($result);
     $_SESSION["username"]=$name;
    if($row){


        echo "<script>alert('登录成功');location.href='index.php';</script>";

        }
        else{

            echo "<script>alert('用户名或密码错误，请重新输入');history.go(-1);</script>";
        }
        ?>
    </body>
    </html>