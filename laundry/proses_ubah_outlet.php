<?php
if($_POST){
    $id_outlet=$_POST['id_outlet'];
    $nama_outlet=$_POST['nama_outlet'];
    $alamat=$_POST['alamat'];
    $telp=$_POST['telp'];
    if(empty($nama_outlet)){
        echo "<script>alert('nama outlet tidak boleh kosong');location.href='daftar_outlet.php';</script>";
    } elseif(empty($alamat)){
        echo "<script>alert('alamat tidak boleh kosong');location.href='daftar_outlet.php';</script>";
    } elseif(empty($telp)){
        echo "<script>alert('Nomor telepon tidak boleh kosong');location.href='daftar_outlet.php';</script>";
    } else {
        include "koneksi.php";  
        $update=mysqli_query($conn,"update outlet set nama_outlet='".$nama_outlet."',
             alamat='".$alamat."',telp='".$telp."' where id_outlet = '".$id_outlet."'")
             or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update Outlet');location.href='tampil_outlet.php';</script>";
            } else {
                echo "<script>alert('Gagal update Outlet');location.href='ubah_outlet.php?id_outlet="
                .$id_outlet."';</script>";
            }
        }
        
    } 
?>