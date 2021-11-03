<?php 

    session_start();

    require_once "connection.php";

    if (isset($_POST['submit'])) {
        $id_user = $_POST['id_user'];
        $pass_user = $_POST['pass_user'];
        $name_bkc = $_POST['name_bkc'];
        $name_car = $_POST['name_car'];
        $address_bkc = $_POST['address_bkc'];
        $tel_bkc = $_POST['tel_bkc'];
        $id_car = $_POST['id_car'];
        
       
        $name_bk_check = "SELECT * FROM name_bk WHERE id_user = '$id_user' LIMIT 1";
        $result = mysqli_query($conn, $name_bk_check);
        $name_bk= mysqli_fetch_assoc($result);

        if ($name_bk['id_user'] === $id_user) {
            echo "<script>alert('Name already exists');</script>";
        } else {
            $pass_userenc = md5($pass_user);

            $query = "INSERT INTO name_bk(id_user,pass_user, name_bkc, name_car,address_bkc,tel_bkc, id_car)
                        VALUE ('$id_user' ,'$pass_userenc' , '$name_bkc', '$name_car', '$address_bkc','$tel_bkc', '$id_car')";
            $result = mysqli_query($conn, $query);

            if ($result) {
                $_SESSION['success'] = "Insert name_bk successfully";
                header("Location: header.php");
            } else {
                $_SESSION['error'] = "Something went wrong";
                header("Location: header.php");
            }
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

    <title>BOOKING</title>
    <link rel="stylesheet" href="style.css">
        <div class="container ">
        <div class="col-auto bg-primary ">
            <centerก> <h3>ระบบบันทึกการจองรถ</h3></centerก> 
            </div>
            </head>
            <body>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="row mb-3 mt-3 fs-4">
                    <label for="id_user" class="col-sm-2 col-form-label">รหัสผู้จอง</label>
                        <div class="col-6">
                            <input type="text" name="id_user"class="form-control" placeholder="รหัสผู้จอง" required>
                            </div>
                            </div>
                        <div class="row mb-3 mt-3 fs-4">
                    <label for="pass_user" class="col-sm-2 col-form-label">รหัสผ่าน</label>
                        <div class="col-6">
                    <input type="password" name="pass_user"class="form-control" placeholder="รหัสผ่าน" required>
                            </div>
                            </div>
                        <div class="row mb-3 mt-3 fs-4">
                    <label for="name_bck" class="col-sm-2 col-form-label">ชื่อจริงผู้จอง</label>
                        <div class="col-sm-6">
                    <input type="text" name="name_bck" class="form-control" placeholder="ชื่อจริงผู้จอง" required>
                            </div>
                            </div>
                            <div class="row mb-3 mt-3 fs-4">
                    <label for="name_car"class="col-sm-2 col-form-label">ยี่ห้อรถ</label>
                        <div class="col-sm-6">
                    <input type="text" name="name_car" class="form-control" placeholder="ยี่ห้อรถ" required>
                            </div>
                            </div>
                        <div class="row mb-3 mt-3 fs-4">
                    <label for="address_bkc"class="col-sm-2 col-form-label">ที่อยู่ผู้จองรถ</label>
                        <div class="col-sm-6">
                    <input type="text" name="address_bkc" class="form-control" placeholder="ที่อยู่ผู้จอง" required>
                            </div>
                            </div>
                            <div class="row mb-3 mt-3 fs-4">
                    <label for="tel_bkc"class="col-sm-2 col-form-label">เบอร์โทร</label>
                        <div class="col-sm-6">
                    <input type="text" name="tel_bkc" class="form-control" placeholder="เบอร์โทร" required>
                            </div>
                            </div>
                            <div class="row mb-3 mt-3 fs-4">
                    <label for="id_car"class="col-sm-2 col-form-label">รหัสรถ</label>
                        <div class="col-sm-6">
                    <input type="text" name="id_car" class="form-control" placeholder="รหัสรถ" required>
                            </div>
                            </div>
                            

                        <br>
                    <center>
                        <div class="col-auto">
                    <input type="submit" class="btn btn-primary" name="submit" value="บันทึกข้อมูล">
                    <input type="reset" class="btn btn-primary" name="reset" value="แก้ไขข้อมูล">
                    </center>
                
                        </div>
                    </div>
                </div>
            
            </form>
        </div>
    </form>
    <br>
    <center><h3><p><a href="header.php">หน้าหลัก</a></p</h3></center>
    
</body>
</html>