<?php

include 'koneksi.php';

if(isset($_POST['jenjang'])){
	$id = $_POST['jenjang'];
	$riwayat = $_POST['pendidikan'];
	$sql = "INSERT INTO pendidikan VALUES ('$no','$tahun','$jenjang')";
	if(mysqli_query($conn,$sql)){
		echo "BERHASIL MENAMBAH DATA RIWAYAT PENDIDIKAN";
	}else{
		echo "ERROR MANMBAH DATA RIWAYAT PENDIDIKAN <br/>".mysqli_error($conn);
	}
}

?>