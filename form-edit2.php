<?php 

include("config.php");

if( !isset($_GET['id']) ){
	// kalau tidak ada id di query string
	header('Location: list-beli2.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM pembeli WHERE id=$id";
$query = mysqli_query($db, $sql);
$beli = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
	die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Formulir Edit Data Pembelian</title>
</head>

<body>
	<header>
		<h3>Formulir Edit Pembelian</h3>
	</header>
	
	<form action="proses-edit2.php" method="POST">
		
		<fieldset>
			
			<input type="hidden" name="id" value="<?php echo $beli['id'] ?>" />
		
		<p>
			<label for="nama">Nama: </label>
			<input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $beli['nama'] ?>" />
		</p>
		<p>
			<label for="alamat">Alamat: </label>
			<textarea name="alamat"><?php echo $beli['alamat'] ?></textarea>
		</p>
        <p>
			<label for="telepon">Nomor HP: </label>
			<input type="text" name="telepon" placeholder="telepeon" value="<?php echo $beli['telepon'] ?>" />
		</p>
		<p>
			<label for="HP">Jenis Smartphone: </label>
			<?php $HP = $beli['HP']; ?>
			<label><input type="radio" name="HP" value="samsung" <?php echo ($HP == 'samsung') ? "checked": "" ?>> Samsung</label>
			<label><input type="radio" name="HP" value="iphone" <?php echo ($HP == 'iphone') ? "checked": "" ?>> Iphone</label>
            <label><input type="radio" name="HP" value="oppo" <?php echo ($HP == 'oppo') ? "checked": "" ?>> Oppo</label>
            <label><input type="radio" name="HP" value="xiaomi" <?php echo ($HP == 'xiaomi') ? "checked": "" ?>> Xiaomi</label>
            <label><input type="radio" name="HP" value="realme" <?php echo ($HP == 'realme') ? "checked": "" ?>> Realme</label>
		</p>
		<p>
			<input type="submit" value="Simpan" name="simpan" />
		</p>
		
		</fieldset>
		
	
	</form>
	
	</body>
</html>
