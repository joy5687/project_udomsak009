<?php
        include('connection.php');

if (isset($_POST) && !empty($_POST)){
        // print_r($_POST);
        $id = $_POST['id'];
        $sql = "DELETE FROM user WHERE id = '$id'";
        $query = mysqli_query($conn, $sql);

        if ($query){
                header("Location:register.php");
        }else{
                echo'การลบข้อมูลผิดพลาด';
        }
}

?>
<center>
        <form action="" method="post">
        <input type="hidden" name="id" value="<?=$_GET['id']?>"
        <lable>ยืนยันการลบข้อมูล</lable><br>
        <input type ="submit" value="ยืนยัน">
        <button><a href="register.php">ยกเลิก</a></button>

        </form>
</center>     
<br>
        <h3><a href="header.php">หน้าหลัก</a>