<?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['edit'])){

    // ambil data dari formulir
    $sku = $_POST['sku'];
    $kategori = $_POST['kategori'];
    $namabarang = $_POST['namabarang'];
    $harga = $_POST['harga'];
    $jumlah_stok = $_POST['jumlah_stok'];

    // buat query update
    $sql = "UPDATE barang SET sku='$sku', kategori='$kategori', namabarang='$namabarang', harga='$harga', jumlah_stok='$jumlah_stok' WHERE sku=$sku";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: list_Gudang.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>