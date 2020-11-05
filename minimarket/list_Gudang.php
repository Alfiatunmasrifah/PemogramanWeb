<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Barokah Mini market</title>
    <link rel="stylesheet" href="list_gudang.css">

</head>

<body>
          
    <ul>
        <li><a href="index.php">Beranda</a></li>
        <li><a href="filter.php">Filter</a></li>
        <li><a href="gudang.php">Gudang</a></li>
        <li><a href="cari.php">Cari</a></li>
    </ul>

    <div class="judul-atas">
        <h1>BAROKAH MINIMARKET</h3>
        <h4>Alfiatun Masrifah | 18081010032</h1>
    </div>

    <div class="tittle">
        <h2>Gudang</h2>
    </div>

    <div class="stokbrg">
        <h3>LIST SEMUA STOK BARANG</h3>
        <a class="button" href="form_tambah.php">Tambah Data</a>
        
        <table style="margin-left:auto;margin-right:auto; margin-top:30px;" border="1" width="50%">
            <tr>
                <th>Sku</th>
                <th>Kategori</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Jumlah Barang</th>
                <th>Aksi</th>
            </tr>
            <?php
                $sql = "SELECT * FROM barang";
                $query = mysqli_query($db, $sql);

                while($brg = mysqli_fetch_array($query)){
                    echo "<tr>";

                    echo "<td>".$brg['sku']."</td>";
                    echo "<td>".$brg['kategori']."</td>";
                    echo "<td>".$brg['namabarang']."</td>";
                    echo "<td>".$brg['harga']."</td>";
                    echo "<td>".$brg['jumlah_stok']."</td>";

                    echo "<td>";
                    echo "<a href='form_edit.php?sku=".$brg['sku']."'>Edit</a> | ";
                    echo "<a href='hapus.php?sku=".$brg['sku']."'>Hapus</a>";
                     
                    echo "</td>";

                    echo "</tr>";
                }
            ?>
        </table>   
    </div>
    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

</body>
</html>