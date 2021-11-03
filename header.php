<?php 

    session_start();

    require_once "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
    <center>
    <div class="container ">
      <div class="col-auto bg-primary">
        <div class="alert alert-primary" role="alert">
        <h2>ระบบบันทึกเวลา-เข้าออก</h2>
        </div>
      </div>
    </div>
    </center>
</head>
  <body>
  <header>
  
    <br>
    <nav class="navbar navbar-light bg-primary">
    <div class="container-fluid">
    <a class="nav-link " aria-current="page" href="index.php">หน้า login</a>
    &nbsp;
    <a class="nav-link " aria-current="page" href="header.php">หน้าหลัก</a>
      &nbsp;
    <a class="nav-link " aria-current="page" href="register.php">สมัครสมาชิก</a>
    &nbsp;
    <a class="nav-link " aria-current="page" href="name_bk.php">จองรถ</a>
    &nbsp;
    <a class="nav-link" href="showname_bk.php">แสดงข้อมูลจองรถ</a>
    &nbsp;
    <a class="nav-link" href="editregis_bk.php">เพิ่ม/แก้ไขข้อมูล</a>
            &nbsp;
        <a class="nav-link" href="deleteregis_bk.php">ลบข้อมูล</a>
            &nbsp;
    <a class="nav-link" href="logout.php">ออกจากระบบ</a>
    <br>
    </form>
  </div>
</nav>
  </form>
  </div>
</nav>
</nav>
</body>
</html>