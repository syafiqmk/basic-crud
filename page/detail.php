<?php 

    // koneksi db
    include "conf/konek.php";

    //get
    $id = $_GET["id"];

    //select data
    $s_d = mysqli_query($kon, "SELECT * FROM tb_crud as c JOIN tb_user as u WHERE u.id = c.id_user AND c.id = $id");
    $d_d = mysqli_fetch_array($s_d);

?>

<div class="head my-4">
    <h1><?= $d_d['title'] ?></h1>
    <hr>
    <span class="fs-5"><?= $d_d['name'] ?></span><br>
    <span class="fs-6"><?= date("l, d M Y H:i:s", strtotime($d_d['date'])) ?></span>
</div>

<div class="body my-5">
    <?= $d_d['body'] ?>
</div>

<div id="button">
    <a href="index.php?page=home" class="btn btn-primary">Back</a>
    <a href="index.php?page=edit&id=<?= $id ?>" class="btn btn-success">Edit</a>
    <a href="index.php?page=hapus&id=<?= $id ?>" class="btn btn-danger">Hapus</a>
</div>