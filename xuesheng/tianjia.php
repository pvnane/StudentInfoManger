<?php
$snos = $_POST['sno'];
$users = $_POST['user'];
$xingBie = $_POST['xingBie'];
$ages = $_POST['age'];
$in = $_POST['institute'];
$dianHua = $_POST['dianHua'];
$times = $_POST['time'];


    $con = mysqli_connect("localhost", "root", 1234);
    if ($con) {
        mysqli_query($con, "set names utf8");
        $db = mysqli_select_db($con, "mystudent");
        $data = mysqli_query($con, "insert into studentinfo(sno,name,sex,age,institute,phone_number,time) values('$snos','$users','$xingBie','$ages','$in','$dianHua','$times')");
        if ($data) {
            echo("<script>alert('添加信息成功')</script>");
            echo("<script>window.location.href='../index.php'</script>");
        } else {
            echo("<script>alert('添加失败,请输入全部数据');history.back();</script>");

        }



}
?>

