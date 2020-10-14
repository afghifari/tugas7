<!DOCTYPE html>
<html>
<head>
	<title>TERAS STORE</title>
</head>

<body>
	<header>
		<h3>Data Pembelian Smartphone</h3>
		<h1>TERAS STORE</h1>
	</header>
	
	<h4>Menu</h4>
	<nav>
		<ul>
			<li><a href="form-beli2.php">BELI</a></li>
			<li><a href="list-beli2.php">Data Pembelian</a></li>
		</ul>
	</nav>
	
	
	<?php if(isset($_GET['status'])): ?>
	<p>
		<?php
			if($_GET['status'] == 'sukses'){
				echo "Pembelian Berhasil!";
			} else {
				echo "Pembelian gagal!";
			}
		?>
	</p>
	<?php endif; ?>
	
	</body>
</html>
