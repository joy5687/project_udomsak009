<?php

        include('connection.php');

        $sql = "SELECT * FROM  user";
        $query = mysqli_query($conn, $sql);
       

        ?>
<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dc3545;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #0dcaf0;
}
</style>
</head>
<body>
  <header>
  <div class="container ">
    <div class="col-auto bg-primary">
      <div class="alert alert-Warning" role="alert">
      <center><h2>ระบบบันทึกจองรถ</h2></center >
      </div>
    </div>
  </div>
  <table>
  <tr>
  <center><th>ชื่อผู้ใช้</th></center>
  <center> <th>รหัสผ่าน</th></center>
  <center><th>คำนำหน้า</th><center>
  <center><th>ชื่อจริง</th><center>
  <center> <th>นามสกุล</th><center>
  <center> <th>อีเมล</th><center>
  <center> <th>เบอร์โทร</th><center> 
  <center> <th>menu</th><center>
  </tr>
  <?php foreach ($query as $data){?>
    <tr>
    <center> <th><?=$data['username']?></th></center>
    <center><th><?=$data['password']?></th></center>
    <center><th><?=$data['pre_name']?></th></center>
    <center><th><?=$data['firstname']?></th></center>
    <center><th><?=$data['lastname']?></th></center>
    <center><th><?=$data['email']?></th></center>
    <center><th><?=$data['tel']?></th></center>
    <th>
    <center><h2><a href="editregis_bk.php?id=<?=$data['id']?>">แก้ไข and เพิ่ม</a></h2></center>
    <center> <a href="deleteregis_bk.php?id=<?=$data['id']?>">ลบข้อมูล</a></center>
    </th>
  </tr> 
    <?php } ?>
</table>
<center><h3><p><a href="header.php">หน้าหลัก</a></p</h3></center>
</body>
</html>