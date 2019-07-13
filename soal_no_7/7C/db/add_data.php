<?php
    include "koneksi.php";
    $add = new crudsimpel();
    $add->connect();

    if(isset($_POST['tambah'])){
        $name = $_POST['name'];
        $id_hobi = $_POST['work'];
        $id_kategori = $_POST['kategori'];
        $add->sql("INSERT INTO  nama (name, id_work, id_salary) VALUES ('$name' , '$id_work' , '$id_salary')");
        $data = $add->collectData();

        $hasil = $add->sql("SELECT * FROM nama WHERE name='$name'");

        if($hasil){
            header("Location:index.php");    
        }else{
            echo " GAGAL ";
        }
    }
?>