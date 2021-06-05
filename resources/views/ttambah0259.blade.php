<html>
<head>
	<title>Tambah Transaksi</title>
</head>
<body>
	<h3>Data Transaksi</h3>
	<a href="/"> Kembali</a>
	
	<br/>
	<br/>
	<form action="/pelanggan/storew" method="post">
		{{ csrf_field() }}
        <label>Pelanggan</label>
        <select name="idpelanggan" class="form-control">
            <option value="">Pilih</option>
                @foreach($pelanggan as $p)
                    <option value="{{ $p-> id}}">{{ $p-> nama}}</option>
                @endforeach
        </select>
        </br>
        </br>
        <label>Barang</label>
        <select name="idbarang" class="form-control">
            <option value="">Pilih</option>
                @foreach($barang as $b)
                    <option value="{{ $b-> id}}">{{ $b-> nama}}</option>
                @endforeach
        </select>
        </br>
        </br>
        <input type="submit" value="Simpan Data">
	</form>

</body>
</html>