<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['sku']) ){
    header('Location: list_Gudang.php');
}

//ambil id dari query string
$sku = $_GET['sku'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM barang WHERE sku=$sku";
$query = mysqli_query($db, $sql);
$barang = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>



<!DOCTYPE html>
<html>
<head>
    <title>Barokah Mini market</title>
    <link rel="stylesheet" href="style-edit.css">
</head>

<body>
          
    <ul>
        <li><a href="#beranda">Beranda</a></li>
        <li><a href="toko.php">Toko</a></li>
        <li><a href="list_Gudang.php">Gudang</a></li>
        <li><a href="cari.php">Cari</a></li>
    </ul>

    <div class="judul-atas">
        <h1>BAROKAH MINIMARKET</h3>
        <h4>Alfiatun Masrifah | 18081010032</h1>
    </div>

    <div class="kotak_login">
        <form action="proses_edit.php" method="POST">
           <label>SKU</label>
           <input type="text" name="sku" class="form_login" value="<?php echo $barang['sku'] ?>">
           <label>Kategori</label>
           <input type="text" name="kategori" class="form_login" value="<?php echo $barang['kategori'] ?>">
           <label>Nama Barang</label>
           <input type="text" name="namabarang" class="form_login" value="<?php echo $barang['namabarang'] ?>">
           <label>Harga Barang</label>
           <input type="text" name="harga" class="form_login" value="<?php echo $barang['harga'] ?>"> 
           <label>Jumlah Stok</label>
           <input type="text" name="jumlah_stok" class="form_login" value="<?php echo $barang['jumlah_stok'] ?>">

           <input type="submit" class="tombol_edit" name="edit" value="Edit">

          <br/>
          <br/> 
              
        </form>         
    </div>    
</body>
</html>