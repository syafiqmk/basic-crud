<?php 

    function page($page) {
        switch ($page) {
            case 'home':
                include "page/home.php";
                break;

            case 'tambah':
                include "page/tambah.php";
                break;

            case 'edit':
                include "page/edit.php";
                break;

            case 'detail':
                include "page/detail.php";
                break;

            case 'hapus':
                include "page/hapus.php";
                break;

            default:
                include "page/home.php";
                break;
        }
    }
?>