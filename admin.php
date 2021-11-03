<?php 

    session_start();

    if (!$_SESSION['userid']) {
        header("Location: index.php");
    } else {

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Page</title>

    <link rel="stylesheet" href="style.css">
<div class="container ">
     <div class="col-auto bg-primary">
        <div class="alert alert-primary" role="alert">
        <center> <h2>ระบบจองรถ ออนไลน์</h2></center>
        </div>
    </div>
</div>
<br>
</head>
<body>
    <header>
<nav class="navbar navbar-light bg-primary">
    <div class="container-fluid">
        <a class="nav-link " aria-current="page" href="index.php">หน้า login</a>
            &nbsp;
        <a class="nav-link " aria-current="page" href="header.php">หน้าหลัก</a>
            &nbsp;
        <a class="nav-link " aria-current="page" href="register.php">สมัครสมาชิก</a>
            &nbsp;
        <a class="nav-link " aria-current="page" href="show_regis.php">แสดงชื่อสมาชิก</a>
            &nbsp;
            <a class="nav-link " aria-current="page" href="showname_bk.php">แสดงชื่อผู้เช่ารถ</a>
            &nbsp;
            <a class="nav-link " aria-current="page" href="showname_car.php">แสดงรหัส-ชื่อรถ</a>
            &nbsp;
           
        <br>
    </div>
</nav>
    </from>
        <h1>You are Admin</h1>
        <h3>Hi, <?php echo $_SESSION['user']; ?></h3>
        <br>

            <h4> <a class="nav-link" href="logout.php">ออกจากระบบ</a></h4>
    
</body>
</html>


<?php } ?>