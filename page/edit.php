<?php

// koneksi db
include "conf/konek.php";

//get
$id = $_GET["id"];

//select data
$s_d = mysqli_query($kon, "SELECT * FROM tb_crud WHERE id = $id");
$d_d = mysqli_fetch_array($s_d);

// proses edit
$title = htmlspecialchars(ucfirst($_POST["title"]));
$body = htmlspecialchars($_POST["body"]);
$date = date("Y-m-d H:i:s");

if (isset($_POST["submit"])) {
    $q_u_d = "UPDATE tb_crud SET title = '$title', body = '$body', date = '$date' WHERE id = '$id' ";
    $u_d = mysqli_query($kon, $q_u_d);
    // var_dump($q_u_d);
    // var_dump($u_d);
    // var_dump(mysqli_error($kon));
    // var_dump($_POST);
    if ($u_d) {
        // echo "<script>window.alert('Edit Data Berhasil!'); window.location.reload(index.php?page=home);</script>";
        header("location:index.php?page=home");
    } else {
        echo "<script>window.alert('Edit Data Gagal!'); window.location.reload(index.php?page=home);</script>";
    }
}
?>

<h1 class="text-center">Edit Data</h1>

<div class="row d-flex justify-content-center">
    <div class="col-md-6">
        <form method="post">
            <div class="mb-3">
                <label for="">Title</label>
                <input type="text" name="title" class="form-control" placeholder="Title" autocomplete="off" required value="<?= $d_d['title'] ?>">
            </div>
            <div class="mb-3">
                <label for="">Body</label>
                <textarea name="body" class="form-control" cols="30" rows="10" placeholder="Body" autocomplete="off" required><?= $d_d['body'] ?></textarea>
            </div>
            <div class="mb-3">
                <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                <a href="index.php?page=home" class="btn btn-danger">Cancel</a>
            </div>
        </form>
    </div>
</div>