<?php
require_once('database.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $tglpinjam = $_POST['tgl_pinjam'];
    $tglkembali = $_POST['tgl_kembali'];
    $noident = $_POST['no_identitas'];
    $kode_brg = $_POST['kode_barang'];
    $nama_brg = $_POST['nama_barang'];
    $jumlah = $_POST['jumlah_pinjam'];
    $keperluan = $_POST['keperluan'];
    $idlogin = $_POST['id_login'];

    $simpan = inputpeminjaman($id, $tglpinjam, $tglkembali, $noident, $kode_brg, $nama_brg, $jumlah, $keperluan, $idlogin);
if($simpan){
    header('Location: peminjaman.php');
    exit;
} else {
    header('Location: peminjaman.php');
    exit;
}

    echo $simpan;
}
?>
