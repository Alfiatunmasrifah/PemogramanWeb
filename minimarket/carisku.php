<?php
include("config.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Barokah Mini market</title>
    <link rel="stylesheet" href="style-index.css">
</head>

<body>
          
    <ul>
        <li><a href="index.php">Beranda</a></li>
        <li><a href="filter.php">Filter</a></li>
        <li><a href="list_Gudang.php">Gudang</a></li>
        <li><a href="cari.php">Cari</a></li>
    </ul>

    <div class="judul-atas">
        <h1>BAROKAH MINIMARKET</h3>
        <h4>Alfiatun Masrifah | 18081010032</h1>
    </div>

    <form action="carisku.php" method="GET">
                <label>Cari :</label>
                <input type="text" name="cari" placeholder="Cari SKU">
                <input type="submit" value="Cari">
            </form>
            <h1>Daftar Barang</h1>
            <table border="3">
                <thead>
                    <tr>
                        <td><h2>SKU</h2></td>
                        <td><h2>kategori</h2></td>
                        <td><h2>nama barang</h2></td>
                        <td><h2>harga</h2></td>
                        <td><h2>Jumlah Stok</h2></td>
                    </tr>
                </thead>
                <tbody>
                <?php 
                if(isset($_GET['cari'])){
                    $cari = $_GET['cari'];
                    $query = "SELECT * from barang where sku like '%".$cari."%'";

                    //eksekusi query
                    $data = mysqli_query($db, $query);			
                }else{
                    $query = "SELECT * from barang";
                    $data = mysqli_query($db, $query);		
                }
                $no = 1;
                ?>
                <?php while($d = mysqli_fetch_array($data)): ?>
                <tr>
                    <td><h2><?php echo $d['sku']; ?></h2></td>
                    <td><h2><?php echo $d['kategori']; ?></h2></td>
                    <td><h2><?php echo $d['namabarang']; ?></h2></td>
                    <td><h2><?php echo $d['harga']; ?></h2></td>
                    <td><h2><?php echo $d['jumlah_stok']; ?></h2></td>
                </tr>
                <?php endwhile; ?>
                </tbody>
            </table>
        </form>
    
</body>
</html>