<?php 

    session_start();

    require_once "connection.php";

    if (isset($_POST['submit'])) {

        $username = $_POST['username'];
        $password = $_POST['password'];
        $pre_name = $_POST['pre_name'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];


        $user_check = "SELECT * FROM user WHERE username = '$username' LIMIT 1";
        $result = mysqli_query($conn, $user_check);
        $user = mysqli_fetch_assoc($result);

        if ($user['username'] === $username) {
            echo "<script>alert('Username already exists');</script>";
        } else {
            $passwordenc = md5($password);

            $query = "INSERT INTO user (username, password,pre_name, firstname, lastname,email,tel, userlevel)
                        VALUE ('$username', '$passwordenc','$pre_name', '$firstname', '$lastname', '$email', '$tel', 'm')";
            $result = mysqli_query($conn, $query);

            if ($result) {
                $_SESSION['success'] = "Insert user successfully";
                header("Location: index.php");
            } else {
                $_SESSION['error'] = "Something went wrong";
                header("Location: index.php");
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

    <title>Employee Page</title>
    <link rel="stylesheet" href="style.css">

     <div class="container ">
     <center><div class="col-auto bg-primary">
        <div class="alert alert-primary" role="alert">
        <h2>ระบบบันสมัครสมาชิก</h2>
</div>
            </div>
            </center>
            <br>
            </div>
            </head>
            <body>
            <header>
              
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="input-group mb-3">
                    <label for="id_car" class="col-sm-2 col-form-label ">รหัสรถ</label>
                    <div class="col-5">
                    <input type="text" name="id_car"class="form-control" placeholder="รหัสรถ" required> 
                </div>
            </div>

            <div class="input-group mb-3">
                    <label for="name_car" class="col-sm-2 col-form-label" >รหัสผ่าน</label>
                     <div class="col-sm-5">
                     <input type="name_car" name="name_car" class="form-control" placeholder="ชื่อรถ" required> 
                  </div>
             </div>
             <div class="input-group mb-3">
             
                    <br>
                    <center>
                    <div class="col-auto">
                    <input type="submit" class="btn btn-primary" name="submit" value="บันทึกข้อมูล">
                    <input type="reset" class="btn btn-primary" name="reset" value="แก้ไขข้อมูล">
                    </div></center>
                    </div>
           
            
                </form>

<br>
<h3><a href="header.php">กลับสู่ หน้าหลัก</a></h3>
</body>
</html>