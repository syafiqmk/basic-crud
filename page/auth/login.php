<?php 

    // include koneksi db
    include "../../conf/konek.php";

    $user = htmlspecialchars($_POST["user"]);
    $pass = md5($_POST["pass"]);

    if(isset($_POST["submit"])) {
        $q_s_u = "SELECT * FROM tb_user WHERE username = '$user' AND password = '$pass' ";
        $s_u = mysqli_query($kon, $q_s_u);

        if($s_u) {
            $row = mysqli_num_rows($s_u);

            if($row > 0) {
                $d_u = mysqli_fetch_array($s_u);

                $_SESSION["id"] = $d_u['id'];
                $_SESSION["user"] = $d_u['username'];
                $_SESSION["name"] = $d_u['name'];

                header("location:../../".base_url."?page=home");
            } else {
                echo "<script>window.alert('Login Gagal!')</script>";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- link css -->
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="../../css/style.css">
</head>

<body>

    <!-- content -->
    <div class="container mt-5">
        <h2 class="text-center">Login</h2>
        <div class="row d-flex justify-content-center mt-4">
            <div class="col-md-4 col-sm-12">
                <form method="post">
                    <div class="mb-3">
                        <label for="">Username</label>
                        <input type="text" name="user" class="form-control" placeholder="Username" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="">Passwords</label>
                        <input type="password" name="pass" class="form-control" placeholder="Password" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <button type="submit" name="submit" class="btn btn-primary">Login</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </div>
                </form>
                <div class="mb-3">
                    <p>Belum punya akun? <a href="register.php">Register!</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- link script -->
    <script src="../../js/jquery-3.6.0.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/script.js"></script>
</body>

</html>