<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['tambah'])){

    // ambil data dari formulir
    $sku = $_POST['sku'];
    $kategori = $_POST['kategori'];
    $namabarang = $_POST['namabarang'];
    $harga = $_POST['harga'];
    $jumlah_stok = $_POST['jumlah_stok'];

    // buat query
    $sql = "INSERT INTO barang (sku, kategori, namabarang, harga, jumlah_stok) VALUE ('$sku', '$kategori', '$namabarang', '$harga', '$jumlah_stok')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>