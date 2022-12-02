<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>无标题文档</title>
</head>
<body>
<table width="900" border="1" align="center">
    <tr>
        <td>
            <?php
            $id=$_POST["id"];
            $sno=$_POST["sno"];

            $user=$_POST["user"];

            $xingbie=$_POST["xingBie"];

            $age=$_POST["age"];

            $in=$_POST["institute"];

            $dianHua=$_POST["dianHua"];

            $time=$_POST["time"];

            $con=mysqli_connect("localhost","root","1234");
            if($con){
                mysqli_query($con,"set names utf8");
                $db=mysqli_select_db($con,"mystudent");
                $data=$con->query("UPDATE studentinfo  SET name ='".$user."',sno='".$sno."',sex='".$xingbie."',age='".$age."',institute='".$in."' ,phone_number='".$dianHua."',time='".$time."'where id=".$id );
                if($data>0){
                    echo "<script>alert('修改信息成功');location.href='index.php'</script> ";
                  }
                else{
                    echo("<script>alert('修改失败');</script>");

                }
            }
            $con->close();
            ?>
        </td>

    </tr>

</table>
</body>

</html>
