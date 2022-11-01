<?php
if($_POST){
    $id_paket=$_POST['id_paket'];
    $jenis_paket=$_POST['jenis_paket'];
    $deskripsi=$_POST['deskripsi'];
    $harga=$_POST['harga'];
    if(empty($jenis_paket)){
        echo "<script>alert('jenis paket tidak boleh kosong');location.href='tambah_paket.php';</script>";
    } elseif(empty($deskripsi)){
        echo "<script>alert('Deskripsi tidak boleh kosong');location.href='tambah_paket.php';</script>";
    } elseif(empty($harga)){
        echo "<script>alert('Harga tidak boleh kosong');location.href='tambah_paket.php';</script>";
    } else {
        include "koneksi.php";  
        $update=mysqli_query($conn,"update paket set jenis_paket='".$jenis_paket."',
             deskripsi='".$deskripsi."',harga='".$harga."' where id_paket = '".$id_paket."'")
             or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update Paket');location.href='tampil_paket.php';</script>";
            } else {
                echo "<script>alert('Gagal update Paket');location.href='ubah_paket.php?id_paket="
                .$id_paket."';</script>";
            }
        }
        
    } 
?>