<html>
<head>
	<title>Ikhlasul Nusa 1461900259</title>
</head>
<body>
 
	<style type="text/css">
		.pagination li{
			float: left;
			list-style-type: none;
			margin:5px;
		}
	</style>
 
	
	<h3>Data Pembelian</h3>
	<p><a href="/pelanggan/tambah"> + Tambah Pembeli Baru</a></p>
	<p><a href="/transaksi/tambah"> + Tambah Transaksi Baru</a></p>
	<p><a href="/barang/tambah"> + Tambah Barang Baru</a></p>
	<p>Cari Data Pembelian :</p>
	
	<form action="/pelanggan" method="GET">
		<input type="text" name="cari" placeholder="Nama Pembeli .." value="{{ old('cari') }}">
		<input type="submit" value="CARI">
	</form>

    <table border="1">
		<tr>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Barang</th>
			<th>Harga</th>
			<th>Opsi</th>
		</tr>
		@foreach($pelanggan as $p)
        <tr>
			<td>{{ $p-> namapelanggan}}</td>
			<td>{{ $p-> alamat}}</td>
			<td>{{ $p-> barang}}</td>
			<td>{{ $p-> harga}}</td>
			<td>
				<a href="/transaksi/edit/{{ $p->idtransaksi }}">Edit</a>
				|
				<a href="/transaksi/hapus/{{ $p->idtransaksi }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>