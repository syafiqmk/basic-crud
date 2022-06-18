<?php 

    function title($page) {
        switch ($page) {
            case 'home':
                echo 'Home';
                break;

            case 'edit':
                echo 'Edit Data';
                break;

            case 'tambah':
                echo 'Tambah Data';
                break;

            case 'detail':
                echo 'Detail Data';
                break;

            default:
                echo 'Default Title';
                break;
        }
    }
?>