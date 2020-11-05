<?php

include("config.php");

if( isset($_GET['sku']) ){

    // ambil id dari query string
    $id = $_GET['sku'];

    // buat query hapus
    $sql = "DELETE FROM barang WHERE sku=$id";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: list_Gudang.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>