<?php 
    // include koneksi database
    include "conf/konek.php";

    //check login
    if (!$_SESSION["user"]) {
        header("location:page/auth/login.php");
    }

    // get title
    $page = $_GET["page"];
    include "title.php";
    include "page.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= title($page); ?></title>
    <!-- link css -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <!-- navbar -->
    <nav class="navbar navbar-expand-md navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="index.php?page=home">Procedural PHP CRUD</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarID"
                aria-controls="navbarID" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarID">
                <ul class="navbar-nav ms-auto mb-3 mb-lg-0">
                    <li class="nav-item">
                        <span class="nav-link text-white">Welcome, <?= $_SESSION["name"] ?></span>
                    </li>
                    
                    <li class="nav-item">
                        <a href="page/auth/logout.php" class="btn btn-danger">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- content -->
    <div class="container">
        <?= page($page) ?>
    </div>
    

    <!-- link script -->
    <script src="js/jquery-3.6.0.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/script.js"></script>
</body>
</html>