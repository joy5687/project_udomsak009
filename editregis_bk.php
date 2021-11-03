<?php

include('connection.php');

$id =$_GET['id'];
$sql = "SELECT * FROM  user WHERE id ='$id'";
$query = mysqli_query($conn, $sql);
$data =mysqli_fetch_assoc($query);
if(isset($_POST) && !empty($_POST)){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $pre_name = $_POST['pre_name'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
        $sql_edit = "UPDATE user SET username ='$username ',password='$password',pre_name ='$pre_name' ,firstname='$firstname',lastname='$lastname',email='$email',tel='$tel',
        
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
                    <label for="username" class="col-sm-2 col-form-label">ชื่อผู้เช่า</label>
                    <div class="col-6">
                    <input type="text" name="username" value="<?=$data['username']?>" class="form-control" placeholder="รหัสผู้จอง" required>
                    </div>
                  </div>
                  <div class="row mb-3 mt-3 fs-4">
                    <label for="password" class="col-sm-2 col-form-label">ชื่อผู้จอง</label>
                    <div class="col-6">
                    <input type="text" name="password" value="<?=$data['password']?>" class="form-control" placeholder="ชื่อผู้จองรถ" required>
                    </div>
                  </div>
               <div class="row mb-3 mt-3 fs-4">
                    <label for="pre_name" class="col-sm-2 col-form-label">คำนำหน้า</label>
                    <div class="col-6">
                    <input type="text" name="pre_name"  value="<?=$data['pre_name']?>" class="form-control" placeholder="คำนำหน้า" required>
                    </div>
                  </div>  <div class="row mb-3 mt-3 fs-4">
                    <label for="firstname" class="col-sm-2 col-form-label">ที่อยู่ผู้จองรถ</label>
                    <div class="col-6">
                    <input type="text" name="firstname" value="<?=$data['firstname']?>" class="form-control" placeholder="ชื่อจริง" required>
                    </div>
                  </div>
                <div class="row mb-3 mt-3 fs-4">
                    <label for="lastname" class="col-sm-2 col-form-label">รหัสผู้เช่า</label>
                    <div class="col-6">
                    <input type="text" name="lastname"  value="<?=$data['lastname']?>" class="form-control" placeholder="นามสกุล" required>
                    </div>
                  </div>
                  <div class="row mb-3 mt-3 fs-4">
                    <label for="email" class="col-sm-2 col-form-label">รหัสผู้เช่า</label>
                    <div class="col-6">
                    <input type="text" name="email"  value="<?=$data['email']?>" class="form-control" placeholder="อีเมล" required>
                    </div>
                  </div>
                  <div class="row mb-3 mt-3 fs-4">
                    <label for="tel" class="col-sm-2 col-form-label">รหัสผู้เช่า</label>
                    <div class="col-6">
                    <input type="text" name="tel"  value="<?=$data['tel']?>" class="form-control" placeholder="เบอร์โทร" required>
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
      <center><h3><p><a href="logout.php">หน้าหลัก</a></p</h3><center>
    
</body>
</html<?php

include('connection.php');

$id =$_GET['id'];
$sql = "SELECT * FROM  user WHERE id ='$id'";
$query = mysqli_query($conn, $sql);
$data =mysqli_fetch_assoc($query);
if(isset($_POST) && !empty($_POST)){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $pre_name = $_POST['pre_name'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
        $sql_edit = "UPDATE user SET username ='$username ',password='$password',pre_name ='$pre_name' ,firstname='$firstname',lastname='$lastname',email='$email',tel='$tel',
        
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
                    <label for="username" class="col-sm-2 col-form-label">ชื่อผู้เช่า</label>
                    <div class="col-6">
                    <input type="text" name="username" value="<?=$data['username']?>" class="form-control" placeholder="รหัสผู้จอง" required>
                    </div>
                  </div>
                  <div class="row mb-3 mt-3 fs-4">
                    <label for="password" class="col-sm-2 col-form-label">ชื่อผู้จอง</label>
                    <div class="col-6">
                    <input type="text" name="password" value="<?=$data['password']?>" class="form-control" placeholder="ชื่อผู้จองรถ" required>
                    </div>
                  </div>
               <div class="row mb-3 mt-3 fs-4">
                    <label for="pre_name" class="col-sm-2 col-form-label">คำนำหน้า</label>
                    <div class="col-6">
                    <input type="text" name="pre_name"  value="<?=$data['pre_name']?>" class="form-control" placeholder="คำนำหน้า" required>
                    </div>
                  </div>  <div class="row mb-3 mt-3 fs-4">
                    <label for="firstname" class="col-sm-2 col-form-label">ที่อยู่ผู้จองรถ</label>
                    <div class="col-6">
                    <input type="text" name="firstname" value="<?=$data['firstname']?>" class="form-control" placeholder="ชื่อจริง" required>
                    </div>
                  </div>
                <div class="row mb-3 mt-3 fs-4">
                    <label for="lastname" class="col-sm-2 col-form-label">รหัสผู้เช่า</label>
                    <div class="col-6">
                    <input type="text" name="lastname"  value="<?=$data['lastname']?>" class="form-control" placeholder="นามสกุล" required>
                    </div>
                  </div>
                  <div class="row mb-3 mt-3 fs-4">
                    <label for="email" class="col-sm-2 col-form-label">รหัสผู้เช่า</label>
                    <div class="col-6">
                    <input type="text" name="email"  value="<?=$data['email']?>" class="form-control" placeholder="อีเมล" required>
                    </div>
                  </div>
                  <div class="row mb-3 mt-3 fs-4">
                    <label for="tel" class="col-sm-2 col-form-label">รหัสผู้เช่า</label>
                    <div class="col-6">
                    <input type="text" name="tel"  value="<?=$data['tel']?>" class="form-control" placeholder="เบอร์โทร" required>
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
      <center><h3><p><a href="logout.php">หน้าหลัก</a></p</h3><center>
    
</body>
</html>