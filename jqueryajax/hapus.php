<?php
 include('koneksi.php');
 $jenjang = $_GET['jenjang'];

 if(isset($_GET['jenjang'])){
	$delete = mysqli_query($conn, "DELETE FROM pendidikan WHERE jenjang = '$jenjang' ");
 }

?>