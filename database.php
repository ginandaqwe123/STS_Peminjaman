<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "sts_ginan";
$koneksi = mysqli_connect($host, $user, $pass, $dbname) or die("Gagal terhubung dengan database " . mysqli_error($koneksi));

function tampildata($tablename)
{
    global $koneksi;
    $hasil = mysqli_query($koneksi, "SELECT peminjaman.id, peminjaman.tgl_pinjam, peminjaman.tgl_kembali, barang.kode_barang, barang.nama_barang, peminjaman.jumlah_pinjam,
     peminjaman.keperluan, peminjaman.status, user.no_identitas, peminjaman.id_login FROM peminjaman INNER JOIN barang on peminjaman.kode_barang = barang.kode_barang INNER JOIN user on peminjaman.id_login = user.id_login ORDER BY id ASC");
    $rows = [];
    while ($row = mysqli_fetch_assoc($hasil)) {
        $rows[] = $row;
    }
    return $rows;
}

function editdatabarang($tablename, $id)
{
    global $koneksi;
    $query =  "SELECT * from $tablename where id_barang = $id";
    $hasil = $koneksi->query($query);

    if ($hasil->num_rows > 0) {
        return $hasil->fetch_assoc();
    } else {
        return null;
    }
}


function updatedata($table, $data, $id)
{
    global $koneksi;
    $sql = "UPDATE $table SET note = '$data' WHERE id = '$id'";
    $hasil = mysqli_query($koneksi, $sql);
    return $hasil;
}

function delete($tablename, $id)
{
    global $koneksi;
    $hasil = mysqli_query($koneksi, "DELETE from $tablename where id_barang='$id'");
    return $hasil;
}

function cek_login($username, $password)
{
    global $koneksi;
    $uname = $username;
    $upass = $password;

    $hasil = mysqli_query($koneksi, "select * from user where username='$uname' and password=$upass");
    $cek = mysqli_num_rows($hasil);
    if ($cek > 0) {
        $query = mysqli_fetch_array($hasil);
        $_SESSION['id'] = $query['id'];
        $_SESSION['username'] = $query['username'];
        $_SESSION['role'] = $query['role'];
        return true;
    } else {
        return false;
    }
}

function tampildata1($tablename)
{
    global $koneksi;
    $hasil = mysqli_query($koneksi, "select * from $tablename");
    $rows = [];
    while ($row = mysqli_fetch_assoc($hasil)) {
        $rows[] = $row;
    }
    return $rows;
}


function tambahbarang($id_brg, $kode_brg, $nama_brg, $kategori, $merk, $jumlah) {
    global $koneksi;
    $query = "INSERT INTO barang (id_barang, kode_barang, nama_barang, kategori, merk, jumlah) VALUES ('$id_brg', '$kode_brg', '$nama_brg', '$kategori', '$merk', '$jumlah')";

    if ($koneksi->query($query) === TRUE) {
        return "Barang berhasil ditambahkan.";
    } else {
        return "Error: " . $query . "<br>" . $koneksi->error;
    }
}

function inputpeminjaman($id, $tgl_pinjam, $tgl_kembali, $no_ident, $kode_brg, $nama_brg, $jml, $keperluan, $idlogin)
{
    global $koneksi;
    $sql= "INSERT INTO peminjaman (id, tgl_pinjam, tgl_kembali, no_identitas, kode_barang, nama_barang, jumlah_pinjam, keperluan, id_login) VALUES ('$id', '$tgl_pinjam', '$tgl_kembali', '$no_ident', '$kode_brg', '$nama_brg', '$jml', '$keperluan', '$idlogin')";
    $hasil = mysqli_query($koneksi, $sql);
    return $hasil;
}
?>