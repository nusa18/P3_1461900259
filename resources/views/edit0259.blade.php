<html>
<head>
	<title>Edit</title>
</head>
<body>
	<h3>Edit</h3>
	<a href="/"> Kembali</a>
	<br/>
	<br/>

	@foreach($pelanggan as $p)
	<form action="/transaksi/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->idtransaksi }}"> <br/>
		Nama  :<input type="text" required="required" name="nama" value="{{ $p->namapelanggan }}"> <br/>
		Alamat :<input type="text" required="required" name="alamat" value="{{ $p->alamat }}"> <br/>
		Barang : <input type="text" required="required" name="barang" value="{{ $p->barang }}"> <br/>
		Harga : <input type="text" required="required" name="harga" value="{{ $p->harga }}"></input> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		
 
</body>
</html>