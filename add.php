<html>
<head>
    <title>主页</title>
    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
        }
        body {
            height: auto;

        }
        table {
            margin: 0 auto;
            width: 60%;
            text-align: center;
            border-spacing: 0;
            padding-bottom: -20px;

        }
        header {
            display: flex;
            flex-flow: row nowrap;
            justify-content: space-between;
        }
        header h1 {
            color: #9a9897;
        }
        header hr {
            margin: 20px 20px 0;
            background-color: #bc9470;
            border: 2px solid #bc9470;
            width: 30%;
            height: 0;
        }
        main #adbt {
            margin-left: 70px;
            margin-top: 20px;
        }
        main button {
            margin: 20px 5px;
            width: 38px;
            height: 35px;
            color: white;
        }
        main button.buttons {
            width: 40px;
            height: 30px;
            border: none;
            margin-left: -10px;
            margin-right: -10px;
            color: white;
            text-align: center;
            background-image: linear-gradient(to right, #c979d4,#fa719d);
            border-radius: 5px;
        }
        .nav {
            width: 1000px;
            height: 60px;
            border: #606266 1px solid;
            border-radius: 10px;
            background-color: rgba(125, 126, 127, 0.03);
            margin: 50px auto 0 auto;
        }
        .nav ul li {
            list-style: none;
            width: 90px;
            height: 60px;
            float: left;
            text-align: center;
            line-height: 60px;
        }
        .left {
            float: left;
        }
        .juzhong {
            line-height: 60px;
            margin-left: 8px;
            color: #788080;
        }
        .nav-yong {
            width: 230px;
            height: 60px;
            line-height: 60px;
            margin-left: 250px;
        }
        .nav-yong a button {
            width: 70px;
            height: 30px;
            border: none;
            margin-left: 40px;
            color: white;
            text-align: center;
            background-image: linear-gradient(to right, #c979d4,#fa719d);
            border-radius: 5px;
        }
        a{
            text-decoration: none;
            color: #606266;
        }
        a:hover {
            color: red;
        }
        .Login {
            width: 630px;
            height: 540px;
            position: fixed;
            top: 111px;
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto;
            padding-top: 20px;
            box-shadow: 0 0 5px rgba(0,0,0,0.4);
        }
        label {
            display: block;
        }
        form {
            margin: 10px 140px;
        }
        h2 {
            text-align: center;
            font-size: 25px;
            color: #606266;
        }
        .put {
            width: 220px;
            height: 30px;
            background: transparent;
            margin-top: 25px;
            border: none;
            border-bottom: 1px wheat solid;
            outline: none;
            color: #606266;
            font-size: 17px;
        }
        input::-webkit-input-placeholder {
            color: #2aabd2;
        }
        .tijiao {
            float: left;
            width: 100px;
            height: 30px;
            border: none;
            margin-left: 20px;
            color: white;
            margin-top: 20px;
            text-align: center;
            background-image: linear-gradient(to right, #c979d4,#fa719d);
            border-radius: 20px;

        }
        .tijiaos {
            float: right;
            width: 100px;
            height: 30px;
            border: none;
            margin-right: 100px;
            color: white;
            margin-top: 20px;
            text-align: center;
            background-image: linear-gradient(to right, #c979d4,#fa719d);
            border-radius: 20px;
        }

        span {
            font-size: 15px;
        }
        .shang {
            margin-top: 40px;
        }
        #blankCheckbox {
            width: 15px;
            margin-left: 20px;
        }
        table tr td{
            background-color: #e9e9e9;

        }


    </style>
</head>
<body>
<?php
//session_start();
//if(isset($_SESSION["username"])){
//?>
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
            <!--                <td class="s">--><?php //include("times.php");?><!--</td>-->
            <td><a href="SelectAll.php">浏览学生信息</a></td>
            <td><a href="add.php">添加信息</a></td>
            <td><a href="edit.php">编辑信息 </a></td>
            <td><a href="cha.php">查询信息</a></td>
            <td><a href="loginout.php"><button class="buttons" type="button">退出</button></a></td>
        </tr>

    </table>
</main>

<div class="Login">
    <h2>添加学生</h2>
    <form action="xuesheng/tianjia.php" method="post">
        <label>
            <span>学&nbsp;&nbsp;&nbsp;&nbsp;号</span>
            <input type="text" class="put" name="sno" placeholder="Sno">
        </label>
        <label>
            <span>姓&nbsp;&nbsp;&nbsp;&nbsp;名</span>
            <input type="text" class="put" name="user" placeholder="Name">
        </label>
        <label>
            <div class="shang">
                <span>性&nbsp;&nbsp;&nbsp;别&nbsp;&nbsp;</span>
                <input type="radio" id="blankCheckbox" value="男" name="xingBie">男
                <input type="radio" id="blankCheckbox" value="女" name="xingBie">女
            </div>
        </label>
        <label>
            <span>年&nbsp;&nbsp;&nbsp;龄&nbsp;</span>
            <input type="text" class="put" name="age" placeholder="Age">
        </label>
        <label>
            <span>学&nbsp;&nbsp;&nbsp;院&nbsp;&nbsp;</span>
            <input type="text" class="put" name="institute" placeholder="请输入学生所在学院">
        </label>
        <label>
            <span>电话号码&nbsp;&nbsp;</span>
            <input type="text" class="put" name="dianHua" placeholder="请输入学生电话号码">
        </label>
        <label>
            <span>入学时间&nbsp;&nbsp;</span>
            <input type="text" class="put" name="time" placeholder="请输入学生入学时间">
        </label>
        <button class="tijiao" type="submit" value="添加">添加</button>
        <button class="tijiaos" type="reset" value="重置">重置</button>
    </form>
</div>
<!--    --><?php
//}else{
//    echo "<script>alert('您尚未登录，没有权限访问该页面');location.href='login.php';</script>";
//}
//?>
</body>
</html>





