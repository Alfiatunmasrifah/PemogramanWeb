<?php  
//$koneksi = mysqli_connect('localhost', 'root', '', 'cv');

include 'koneksi.php';

if($_POST['type'] == 'view'){
	$query = mysqli_query($conn, "SELECT * FROM pendidikan");
	$no = 1;
	while 
		($row = mysqli_fetch_array($query)) {
		echo "<tr>
				<td>".$row['no']."</td>
				<td>".$row['tahun']."</td>
				<td>".$row['jenjang']."</td>
				<td>
                <button type='submit' href='hapus.php?jenjang=".$row['jenjang']."' class='btn btn-danger' name='delete'>DELETE</button>
				</td>
		</tr>";
	$no++;
	}
}
?>
