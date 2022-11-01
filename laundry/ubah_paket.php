<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" 
    crossorigin="anonymous"> 
    <title></title>
</head>
<body>
<div class="row" style="margin-top:50px;">
    <div class="col-md">
    <div class="col-md rounded bg-light" style="box-shadow: 4px 4px 5px -4px;padding:10px">
    <?php 
    include "koneksi.php";
    $qry_get_paket=mysqli_query($conn,"select * from paket where 
id_paket = '".$_GET['id_paket']."'");
    $dt_paket=mysqli_fetch_array($qry_get_paket);
    ?>
    <h3>Ubah Paket</h3>
    <form action="proses_ubah_paket.php" method="post">
        <input type="hidden" name="id_paket" value=
  "<?=$dt_paket['id_paket']?>">
        Jenis Paket :
        <?php 
        $arr_jenis_paket=array
        ('Kiloan'=>'Kiloan',
        'Selimut'=>'Selimut',
        'Bed_cover'=>'Bed Cover',
        'Kaos'=>'Kaos');
        ?>
        <select name="jenis_paket" class="form-control">
            <option></option>
            <option value ="Kiloan">Kiloan</option>
            <option value ="Selimut">Selimut</option>
            <option value ="Bed_cover">Bed Cover</option>
            <option value ="Kaos">Kaos</option>
        </select>
        Deskripsi : 
        <input type="text" name="deskripsi" value="<?=$dt_paket['deskripsi']?>" class="form-control">
        Harga : 
        <input type="text" name="harga" value="<?=$dt_paket['harga']?>" class="form-control">
        <br>
        <input type="submit" name="simpan" value="Ubah Paket" class="btn btn-primary">
    </form>
    </div>
    </div>
    </div>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
     crossorigin="anonymous"></script>
</body>
</html>