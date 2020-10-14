<!DOCTYPE html>
<html>
<head>
	<title>TERAS STORE</title>
</head>

<body>
	<header>
		<h3>Formulir Pembelian Smartphone Baru</h3>
	</header>
	
	<form action="proses-pendaftaran2.php" method="POST">
		
		<fieldset>
		
		<p>
			<label for="nama">Nama: </label>
			<input type="text" name="nama" placeholder="nama lengkap" />
		</p>
		<p>
			<label for="alamat">Alamat: </label>
			<textarea name="alamat"></textarea>
		</p>
        <p>
			<label for="telepon">Nomor HP: </label>
			<input type="text" name="telepon" placeholder="telepon" />
		</p>
		<p>
			<label for="HP">Jenis Smartphone: </label>
			<label><input type="radio" name="HP" value="samsung"> Samsung</label>
			<label><input type="radio" name="HP" value="iphone"> Iphone</label>
            <label><input type="radio" name="HP" value="oppo"> Oppo</label>
            <label><input type="radio" name="HP" value="xiaomi"> Xiaomi</label>
            <label><input type="radio" name="HP" value="realme"> Realme</label>
		</p>
		<p>
			<input type="submit" value="daftar" name="daftar" />
		</p>
		
		</fieldset>
	
	</form>
	
	</body>
</html>
