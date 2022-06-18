<?php 

    //koneksi db
    include "conf/konek.php";

    //get
    $id = $_GET["id"];

    //proses hapus
    $d_d = mysqli_query($kon, "DELETE FROM tb_crud WHERE id = '$id'");

    if ($d_d) {
        header("location:index.php?page=home");
    } else {
        header("location:index.php?page=home");
    }
?>