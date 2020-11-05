<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Barokah Mini market</title>
    <link rel="stylesheet" href="style-tambahbrg.css">

</head>

<body>
          
    <ul>
        <li><a href="index.php">Beranda</a></li>
        <li><a href="toko.php">Toko</a></li>
        <li><a href="gudang.php">Gudang</a></li>
        <li><a href="cari.php">Cari</a></li>
    </ul>

    <div class="judul-atas">
        <h1>BAROKAH MINIMARKET</h3>
        <h4>Alfiatun Masrifah | 18081010032</h1>
    </div>

    <div class="tittle">
        <h2>Tambah Barang</h2>
    </div>

    <div class="kotak_login">
        <form action="proses-tambah.php" method="POST">
           <label>SKU</label>
           <input type="text" name="sku" class="form_login" placeholder="sku ..">
           <label>Kategori</label>
           <input type="text" name="kategori" class="form_login" placeholder="kategori ..">
           <label>Nama Barang</label>
           <input type="text" name="namabarang" class="form_login" placeholder="Nama Barang ..">
           <label>Harga Barang</label>
           <input type="text" name="harga" class="form_login" placeholder="Harga barang .."> 
           <label>Jumlah Stok</label>
           <input type="text" name="jumlah_stok" class="form_login" placeholder="jumlah barang ..">

           <input type="submit" class="tombol_tambah" name="tambah" value="Tambah">

          <br/>
          <br/> 
              
        </form>         
    </div>
</body>
</html>