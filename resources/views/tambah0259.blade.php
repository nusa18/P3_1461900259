<html>
<head>
	<title>Tambah Pelanggan</title>
</head>
<body>
	<h3>Data Pembeli</h3>
	<a href="/"> Kembali</a>
	
	<br/>
	<br/>
	<form action="/pelanggan/store" method="post">
		{{ csrf_field() }}
		Nama : <input type="text" name="nama" required="required"> <br/><br/>
		Alamat : <input type="text" name="alamat" required="required"> <br/><br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>