<?php

include('connection.php');

$id =$_GET['id'];
$sql = "SELECT * FROM  name_bk WHERE id ='$id'";
$query = mysqli_query($conn, $sql);
$data =mysqli_fetch_assoc($query);
if(isset($_POST) && !empty($_POST)){
        $id_user = $_POST['id_user'];
        $name_bkc = $_POST['name_bkc'];
        $name_car = $_POST['name_car']; 
        $address_bkc = $_POST['address_bkc'];
        $tel_bkc = $_POST['tel_bkc'];
        $id_car = $_POST['id_car'];
        $sql_edit = "UPDATE name_bk SET id_user ='$id_user ',name_bkc='$name_bkc',name_car ='$name_car' ,address_bkc='$address_bkc',tel_bkc='$tel_bkc',id_car='$id_car',
    
    WHERE id='$id'"; 
    $query_edit = mysqli_query ($conn,$sql_edit);
    if ($query_edit){
        echo 'อัปเดทข้อมูลสำเร็จ'; 
    }else{
        echo'อัปเดทข้อมูลไม่สำเร็จ';

    }
    
}

?>

<!doctype html>
<html lang="en">
<head>
    
    <!-- Required meta tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Edit and Update</title>
    <link rel="stylesheet" href="style.css">
        <div class="container ">
        <div class="col-auto bg-Warning ">
        <center> <h3>ระบบบันทึกการจองรถ</h3></center> 
        </div>
          </head>
            <body>
            <form action="" method="post">
                <div class="row mb-3 mt-3 fs-4">
                    <label for="id_user" class="col-sm-2 col-form-label">ชื่อผู้เช่า</label>
                    <div class="col-6">
                    <input type="text" name="id_user" value="<?=$data['id_user']?>" class="form-control" placeholder="รหัสผู้จอง" required>
                    </div>
                  </div>
                <div class="row mb-3 mt-3 fs-4">
                    <label for="pass_user" class="col-sm-2 col-form-label">รหัสผ่านผู้จอง</label>
                    <div class="col-6">
                    <input type="text" name="pass_user"  value="<?=$data['pass_user']?>" class="form-control" placeholder="รหัสผ่านผู้จองรถ" required>
                    </div>
                  </div>
                  <div class="row mb-3 mt-3 fs-4">
                    <label for="name_bkc" class="col-sm-2 col-form-label">ชื่อผู้จอง</label>
                    <div class="col-6">
                    <input type="text" name="name_bkc" value="<?=$data['name_bkc']?>" class="form-control" placeholder="ชื่อผู้จองรถ" required>
                    </div>
                  </div>
               <div class="row mb-3 mt-3 fs-4">
                    <label for="name_car" class="col-sm-2 col-form-label"></label>
                    <div class="col-6">
                    <input type="text" name="name_car"  value="<?=$data['name_car']?>" class="form-control" placeholder="ยี่ห้อรถ" required>
                    </div>
                  </div>  <div class="row mb-3 mt-3 fs-4">
                    <label for="address_bkc" class="col-sm-2 col-form-label">ที่อยู่ผู้จองรถ</label>
                    <div class="col-6">
                    <input type="text" name="address_bkc" value="<?=$data['address_bkc']?>" class="form-control" placeholder="ที่อยู่ผู้จองรถ" required>
                    </div>
                  </div>
                <div class="row mb-3 mt-3 fs-4">
                    <label for="tel_bkc" class="col-sm-2 col-form-label">รหัสผู้เช่า</label>
                    <div class="col-6">
                    <input type="text" name="tel_bkc"  value="<?=$data['tel_bkc']?>" class="form-control" placeholder="เบอร์โทร" required>
                    </div>
                  </div>
                  <div class="row mb-3 mt-3 fs-4">
                    <label for="id_car" class="col-sm-2 col-form-label">รหัสผู้เช่า</label>
                    <div class="col-6">
                    <input type="text" name="id_car"  value="<?=$data['id_car']?>" class="form-control" placeholder="รหัสรถ" required>
                    </div>
                  </div>
              
                  <br>
                  <center>
                  <div class="col-auto">
                    <input type="submit" class="btn btn-primary" name="submit" value="บันทึกข้อมูล">
                    <input type="reset" class="btn btn-primary" name="reset" value="แก้ไขข้อมูล">
                    </div>
                </div>
                  </center>
              </form>
        </div>
      <br>
      <center><h3><p><a href="header.php">หน้าหลัก</a></p</h3><center>
    
</body>
</html>