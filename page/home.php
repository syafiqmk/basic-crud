<?php 

    // koneksi db
    include "conf/konek.php";

    $id_user = $_SESSION["id"];
    $s_d = mysqli_query($kon, "SELECT * FROM tb_crud WHERE id_user = $id_user  ORDER BY id DESC");
?>

<h1 class="text-center mt-4">Data List</h1>

<div id="button-list" class="d-flex justify-content-center">
    <a href="index.php?page=tambah" class="btn btn-primary">Tambah Data</a>
</div>

<!-- <div id="search">
    <form action="" method="post">
        <div class="mb-3">
            <div class="input-group"></div>
        </div>
    </form>
</div> -->

<table class="table">
    <thead>
        <th>No</th>
        <th>Title</th>
        <th>Date</th>
        <th>Action</th>
    </thead>
    <tbody>
        <?php 
            $no = 1;
            while ($d_d = mysqli_fetch_array($s_d)) { ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $d_d['title'] ?></td>
                    <td><?= date('l, d M Y', strtotime($d_d['date'])) ?></td>
                    <td>
                        <a href="index.php?page=detail&id=<?= $d_d['id'] ?>" class="btn btn-success">Detail</a>
                        <a href="index.php?page=edit&id=<?= $d_d['id'] ?>" class="btn btn-primary">Edit</a>
                        <a href="index.php?page=hapus&id=<?= $d_d['id'] ?>" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            <?php }
        ?>
    </tbody>
</table>