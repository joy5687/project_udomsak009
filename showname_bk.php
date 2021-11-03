<?php

        include('connection.php');

        $sql = "SELECT * FROM  name_bk";
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
  <center><th>รหัสผู้จอง</th></center>
  <center> <th>รหัสผ่านผู้จอง</th></center>
  <center><th>ชื่อจริงผู้จอง</th><center>
  <center><th>ชื่อยี่ห้อรถ</th><center>
  <center> <th>ที่อยู่ผู้เช่ารถ</th><center>
  <center> <th>เบอร์โทรผุ้จอง</th><center>
  <center> <th>รหัสรถ</th><center>
  <center> <th>menu</th><center>
  </tr>
  <?php foreach ($query as $data){?>
    <tr>
    <center> <th><?=$data['id_user']?></th></center>
    <center><th><?=$data['pass_user']?></th></center>
    <center><th><?=$data['name_bkc']?></th></center>
    <center><th><?=$data['name_car']?></th></center>
    <center><th><?=$data['address_bkc']?></th></center>
    <center><th><?=$data['tel_bkc']?></th></center>
    <center><th><?=$data['id_car']?></th></center>
    <th>

    <center><h2><a href="editname_bk.php?id=<?=$data['id']?>">แก้ไข and เพิ่ม</a></h2></center>
    <center> <a href="deletename_bk.php?id=<?=$data['id']?>">ลบข้อมูล</a></center>
    </th>
  </tr> 
    <?php } ?>
</table>
<center><h3><p><a href="header.php">ออกจาก</a></p</h3></center>
</body>
</html>