<?php
    $koneksi = mysqli_connect('localhost','root','','db_kasir');
    if(!$koneksi){
        echo"Koneksi Gagal";
    }
?>