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

    <form action="filter.php" method="post">
        <table border="0px" cellpadding="5px" cellspacing="0px">
        <tr>
            <td>
                <label for="min_harga">Min : </label>
                    <input type="text" name="min_harga" id="min_harga">
                </td>
            <td>
                <label for="max_harga">Max : </label>
                <input type="text" name="max_harga" id="max_harga">
            </td>
            <td>
                <button type="submit" name="submitfilter">Filter</button>
            </td>
        </tr>        
        </table>
    </form>

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