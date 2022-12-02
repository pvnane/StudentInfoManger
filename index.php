<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="css/a.css">
    <title>无标题文档</title>
</head>
<body>
<?php
session_start();
if(isset($_SESSION["username"])){
?>
<div>
    <header>
        <hr/>
        <h1>学生信息管理系统</h1>
        <hr/>
    </header>
    <main>

            <div id="adbt">
            </div>
            <table width="900" border="1" align="center">

            <tr>

                <td><a href="SelectAll.php">浏览学生信息</a></td>
                <td><a href="add.php">添加信息</a></td>
                <td><a href="edit.php">编辑信息 </a></td>
                <td><a href="cha.php">查询信息</a></td>
                <td><a href="loginout.php"><button class="buttons" type="button">退出</button></a></td>
            </tr>
                <tr>
                    <td colspan="7"><h2>学生信息展示</h2></td>
                </tr>
            </table>


            <table>
                <?php
                $con=mysqli_connect("localhost","root","1234");
                mysqli_query($con,"set names utf8");
                if($con){
                //选择数据库
                $db=mysqli_select_db($con,"mystudent");
                if($db){
                //获取数据总行数
                $sql="select * from studentinfo";
                $data = mysqli_query($con,$sql);
                $maxrows = mysqli_num_rows($data);

                //计算总页数

                $page_size = 13;  //每页显示数
                if($maxrows%$page_size == 0){
                    $maxpage = (int)($maxrows/$page_size);
                }else{
                    $maxpage = (int)($maxrows/$page_size)+1;
                }

                //获取当前页
                if(isset($_GET['curpage'])){
                    $page = $_GET['curpage'];
                }else{
                    $page=1;
                }

                //分段取出数据
                $start = $page_size*($page-1);
                $get_sql = "select * from studentinfo limit $start,$page_size";
                //得到数据显示
                $data=mysqli_query($con,$get_sql);
                ?>

                <tbody>
                <tr id="thead">

                    <td class="d" colspan="2" align="center">Id</td>
                    <td>学号</td>
                    <td>姓名</td>
                    <td>性别</td>
                    <td>年龄</td>
                    <td>所属学院</td>
                    <td>电活号码</td>
                    <td>入学时间</td>

                </tr>
                <?php
                while($row = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td><?php echo $row["id"] ?></td>
                        <td><?php echo $row["sno"] ?></td>
                        <td><?php echo $row["name"] ?></td>
                        <td><?php echo $row["sex"] ?></td>
                        <td><?php echo $row["age"] ?></td>
                        <td><?php echo $row["institute"] ?></td>
                        <td><?php echo $row["phone_number"] ?></td>
                        <td><?php echo $row["time"] ?></td>


                    </tr>
                    <?php
                }
                ?>

                </tbody>
            </table>

    </main>
    <table  align="center"><tr><td>
                <?php
                echo "<p>共 $maxpage 页&nbsp;&nbsp;";
                echo "每页 $page_size 项&nbsp;&nbsp;";
                //设置上一页
                if($page>1){
                    $prepage=$page-1;
                    echo "<a href='?curpage=$prepage'>上一页</a>&nbsp;&nbsp;";
                }
                //设置下一页
                if($page<$maxpage){
                    $nextpage=$page+1;
                    echo "<a href='?curpage=$nextpage'>下一页</a>&nbsp;&nbsp;";
                }
                echo "&nbsp;&nbsp;第 $page 页</p>";

                }
                }

                ?>
            </td></tr>
    </table>
</div>
    <?php
}else{
    echo "<script>alert('您尚未登录，没有权限访问该页面');location.href='login.php';</script>";
}
?>
</body>
</html>
