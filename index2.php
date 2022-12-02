<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">
    <title>无标题文档</title>
</head>
<style>
    .el-table .warning-row {
        background: oldlace;
    }

    .el-table .success-row {
        background: #f0f9eb;
    }
    * {
        margin: 0;
        padding: 0;
    }
    body{
        width: 1520px;
    }
</style>
<body>
<div id="app">
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
            $con=mysqli_connect("localhost","root","1234");
            mysqli_query($con,"set names utf8");

            //选择数据库
            $db=mysqli_select_db($con,"mystudent");
            $sql="select * from studentinfo";
            $data = mysqli_query($con,$sql);
            while($row = mysqli_fetch_array($data)){
                ?>
                <td><input type="checkbox"></td>
                <td><?php echo $row["id"] ?></td>
                <td><?php echo $row["sno"] ?></td>
                <td><?php echo $row["name"] ?></td>
                <td><?php echo $row["sex"] ?></td>
                <td><?php echo $row["age"] ?></td>
                <td><?php echo $row["institute"] ?></td>
                <td><?php echo $row["phone_number"] ?></td>
                <td><?php echo $row["time"] ?></td>
                <?php
            }
            ?>

            </tbody>
        </table>

    </main>

    <!--表格-->
    <template>
        <el-table
                :data="tableData"
                style="width: 100%"
                :row-class-name="tableRowClassName"
                @selection-change="handleSelectionChange">>
            <el-table-column
                    type="selection"
                    width="55">
            </el-table-column>
            <el-table-column
                    align="center"
                    prop="id"
                    label="Id"
                    width="140"
                    >
            </el-table-column>
            <el-table-column
                    prop="sno"
                    label="学号"
                    align="center"
                    width="140"
                   >
            </el-table-column>
            <el-table-column
                    prop="name"
                    label="姓名"
                    align="center"
                    width="140"
                    >
            </el-table-column>
            <el-table-column
                    prop="sex"
                    label="性别"
                    align="center"
                    width="140"
                    >
            </el-table-column>
            <el-table-column
                    prop="age"
                    label="年龄"
                    align="center"
                    width="180"
                   >
            </el-table-column>
            <el-table-column
                    prop="institute"
                    label="学院"
                    align="center"
                    width="180"
                   >
            </el-table-column>
            <el-table-column
                    prop="phone_number"
                    label="电活号码"
                    align="center"
                    width="180"
                    >
            </el-table-column>
            <el-table-column
                    prop="time"
                    label="入学时间"
                    align="center"
                    width="180"
                   >
            </el-table-column>
            <el-table-column

                    label="操作"
                    align="center"
                    width="180"
            >
                <el-row>
                    <el-button type="primary">修改</el-button>
                    <el-button type="danger">删除</el-button>
                    </el-row>

            </el-table-column>
        </el-table>
    </template>
</div>
</body>

<!-- import Vue before Element -->
<script src="js/vue.js"></script>
<!-- import JavaScript -->
<script src="https://unpkg.com/element-ui/lib/index.js"></script>
<script src="/js/axios-0.18.0.js"></script>
<script>


    new Vue({
        el: '#app',
       mounted() {
            var_this=this;
           axios({
               method: "get",
               url:"http://localhost:63342/student/index.php?_ijt=hmk3knhmal0t3qe1itkd97lu8b&_ij_reload=RELOAD_ON_SAVE"
           }).then(function (resp) {
               _this.tableData = resp.data
           })
       },
        methods: {
            tableRowClassName({row, rowIndex}) {
                if (rowIndex === 1) {
                    return 'warning-row';
                } else if (rowIndex === 3) {
                    return 'success-row';
                }
                return '';
            },
            //复选框选中后执行的方法
            handleSelectionChange(val) {
                this.multipleSelection = val;
                console.log(this.multipleSelection)
            }
        },
        data() {
            return {
                multipleSelection: [],
                tableData: []
            }
        }
    })
</script>
</html>
