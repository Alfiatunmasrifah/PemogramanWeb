<!DOCTYPE html>
<html>
<head>
    <title>Barokah Mini market</title>
    <link rel="stylesheet" href="style-toko.css">
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

    <div class="judul">
        <h2>TOKO</h2>
    </div>

    <div class="notifikasi">
        <?php if(isset($_GET['status'])): ?>
        <p>
            <?php
                if($_GET['status'] == 'sukses'){
                    echo "Barang berhasil di inputkan!";
                } else {
                    echo "barang gagal di inputkan!";
                }
            ?>
        </p>
        <?php endif; ?>
    </div>
    
</body>
</html>