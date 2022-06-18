<?php 
    // include koneksi db
    include "../../conf/konek.php";

    session_destroy();

    header("Location:../../".base_url);
?>