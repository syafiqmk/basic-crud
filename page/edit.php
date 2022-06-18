<?php 

    // koneksi db
    include "conf/konek.php";

    //get
    $id = $_GET["id"];

    //select data
    $s_d = mysqli_query($kon, "SELECT * FROM tb_crud WHERE id = $id");

    // proses edit
    
?>