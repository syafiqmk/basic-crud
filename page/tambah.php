<?php 

    // koneksi db
    include "conf/konek.php";

    // proses tambah
    $title = htmlspecialchars(ucfirst($_POST["title"]));
    $body = htmlspecialchars($_POST["body"]);
    $date = date("Y-m-d H:i:s");
    $id_user = $_SESSION["id"];

    if(isset($_POST["submit"])) {
        $q_i_d = "INSERT INTO tb_crud VALUES('', '$title', '$body', '$date', '$id_user')";
        $i_d = mysqli_query($kon, $q_i_d);

        if($i_d) {
            header("location:index.php?page=home");
        } else {
            echo "<script>window.alert('Data Gagal Ditambah!!')</script>";
        }
    }
?>

<h1 class="text-center mt-4 mb-3">Tambah Data</h1>

<form action="" method="post" style="width: 50vw; margin: auto">
    <div class="mb-3">
        <label for="">Title</label>
        <input type="text" name="title" class="form-control" placeholder="Title" autocomplete="off" required>
    </div>
    <div class="mb-3">
        <label for="">Body</label>
        <textarea name="body" class="form-control" cols="30" rows="10" placeholder="Body" autocomplete="off" required></textarea>
    </div>
    <div class="mb-3">
        <button name="submit" type="submit" class="btn btn-primary">Tambah</button>
        <a href="index.php?page=home" class="btn btn-danger">Cancel</a>
    </div>
</form>