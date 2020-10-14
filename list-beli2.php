<?php include("config2.php"); ?>


<!DOCTYPE html>
<html>
<head>
	<title>TERAS STORE</title>
</head>

<body>
	<header>
		<h3>Data Pembeli</h3>
	</header>
	
	<nav>
		<a href="form-beli2.php">[+] Tambah Baru</a>
	</nav>
	
	<br>
	
	<table border="1">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>No. HP</th>
			<th>Jenis Smartphone</th>
		</tr>
	</thead>
	<tbody>
		
		<?php
		$sql = "SELECT * FROM pembelian_hp";
		$query = mysqli_query($db, $sql);
		
		while($beli = mysqli_fetch_array($query)){
			echo "<tr>";
			
			echo "<td>".$beli['id']."</td>";
			echo "<td>".$beli['nama']."</td>";
			echo "<td>".$beli['alamat']."</td>";
			echo "<td>".$beli['telepon']."</td>";
			echo "<td>".$beli['HP']."</td>";
			
			
			echo "<td>";
			echo "<a href='form-edit.php?id=".$beli['id']."'>Edit</a> | ";
			echo "<a href='hapus.php?id=".$beli['id']."'>Hapus</a>";
			echo "</td>";
			
			echo "</tr>";
		}		
		?>
		
	</tbody>
	</table>
	
	<p>Total: <?php echo mysqli_num_rows($query) ?></p>
	
	</body>
</html>
