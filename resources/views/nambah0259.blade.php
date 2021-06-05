<html>
<head>
	<title>Tambah Barang</title>
</head>
<body>
	<h3>Data Barang</h3>
	<a href="/"> Kembali</a>
	
	<br/>
	<br/>
	<form action="/pelanggan/stored" method="post">
		{{ csrf_field() }}
		Nama : <input type="text" name="nama" required="required"> <br/><br/>
		Harga : <input type="text" name="harga" required="required"> <br/><br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>