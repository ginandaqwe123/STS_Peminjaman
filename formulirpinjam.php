<?php
require_once('database.php')
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

  <title>Peminjaman</title>
</head>

<body>
<?php
  session_start();
  if ($_SESSION['status'] <> "login") {
    header("location:login.php?msg=belum_login");
  } 
?>
<div class="container">
  <br>
  <br>
    <h2>Formulir Peminjaman</h2>

    <form id="formPeminjaman" action="proses_peminjaman.php" method="POST">
    <div class="form-group">
            <label for="id">ID:</label>
            <input type="text" class="form-control" id="id" name="id">
        </div>
        <div class="form-group">
            <label for="tglPinjam">Tanggal Pinjam:</label>
            <input type="date" class="form-control" id="tglPinjam" name="tgl_pinjam">
        </div>
        <div class="form-group">
            <label for="tglKembali">Tanggal Kembali:</label>
            <input type="date" class="form-control" id="tglkembali" name="tgl_kembali">
        </div>
        <div class="form-group">
            <label for="noident">Nomor Identitas:</label>
            <input type="text" class="form-control" id="noident" name="no_identitas">
        </div>
        <div class="form-group">
            <label for="kodeBarang">Kode Barang:</label>
            <input type="text" class="form-control" id="kodeBarang" name="kode_barang">
        </div>
        <div class="form-group">
            <label for="namaBarang">Nama Barang:</label>
            <input type="text" class="form-control" id="namaBarang" name="nama_barang">
        </div>
        <div class="form-group">
            <label for="merk">Merk:</label>
            <input type="text" class="form-control" id="merk" name="merk">
        </div>
        <div class="form-group">
            <label for="jmlPinjam">Jumlah Pinjam:</label>
            <input type="number" class="form-control" id="jmlPinjam" name="jumlah_pinjam">
        </div>
        <div class="form-group">
            <label for="keperluan">Keperluan:</label>
            <textarea class="form-control" id="keperluan" name="keperluan" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="idLogin">ID Login</label>
            <input type="text" class="form-control" id="idLogin" name="id_login">
        </div>
        <button type="submit" name="inputpeminjaman" class="btn btn-primary">Pinjam</button>
    </form>
</div> 

    <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
</body>

</html>
