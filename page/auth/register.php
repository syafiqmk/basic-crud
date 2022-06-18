<?php 

    // include koneksi db
    include "../../conf/konek.php";

    $name = htmlspecialchars($_POST["name"]);
    $user = htmlspecialchars($_POST["user"]);
    $pass = md5($_POST["pass"]);

    if(isset($_POST["submit"])) {
        $q_i_u = "INSERT INTO tb_user VALUES('', '$name', '$user', '$pass')";
        $i_u = mysqli_query($kon, $q_i_u);

        if($i_u) {
            echo "<script>window.alert('Registrasi Berhasil!'); window.location = 'login.php';</script>";
        } else {
            echo "<script>window.alert('Registrasi Gagal!')</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- link css -->
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="../../css/style.css">
</head>

<body>

    <!-- content -->
    <div class="container mt-5">
        <h2 class="text-center">Register</h2>
        <div class="row d-flex justify-content-center mt-4">
            <div class="col-md-4 col-sm-12">
                <form method="post">
                    <div class="mb-3">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Name" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="">Username</label>
                        <input type="text" name="user" class="form-control" placeholder="Username" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="">Passwords</label>
                        <input type="password" name="pass" class="form-control" placeholder="Password" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        <a href="login.php" class="btn btn-danger">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- link script -->
    <script src="../../js/jquery-3.6.0.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/script.js"></script>
</body>

</html>