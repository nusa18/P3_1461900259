<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PelangganController extends Controller
{
    public function tambah(){  
	return view('tambah0259');
    }
    public function ttambah(){
		$pelanggan = DB::table('pelanggan')
		->get();

		$barang = DB::table('barang')
		->get();
		;

	return view('ttambah0259',['pelanggan' => $pelanggan],['barang' => $barang]);
	
    }
    public function nambah(){  
	return view('nambah0259');
    }

    public function store(Request $request){
	DB::table('pelanggan')->insert([
		'nama' => $request->nama,
		'alamat' => $request->alamat,
		
	]);
	DB::table('barang')->insert([
		'nama' => $request->barang,
		'harga' => $request->harga,
		
	]);
	return redirect('/');
	}

	public function stored(Request $request){
		DB::table('barang')->insert([
			'nama' => $request->nama,
			'harga' => $request->harga,
			
		]);
		return redirect('/');
		}

	public function storew(Request $request){
		DB::table('transaksi')->insert([
			'id_barang' => $request->idbarang,
			'id_pelanggan' => $request->idpelanggan,
			
		]);
		return redirect('/');
		}

	public function edit($id){
	// mengambil data pegawai berdasarkan id yang dipilih
	$pelanggan = DB::table('pelanggan')
		->join('transaksi', 'pelanggan.id', '=', 'transaksi.id_pelanggan')
		->join('barang', 'transaksi.id_barang', '=', 'barang.id')
		->select('transaksi.id as idtransaksi','pelanggan.nama as namapelanggan','pelanggan.alamat','barang.nama as barang','barang.harga','pelanggan.nama')
		->where('transaksi.id',$id)->get();

	// passing data pegawai yang didapat ke view edit.blade.php
	return view('edit0259',['pelanggan' => $pelanggan]);
	}

	public function update(Request $request){
	// update data pegawai
	DB::table('pelanggan')
	->join('transaksi', 'pelanggan.id', '=', 'transaksi.id_pelanggan')
	->join('barang', 'transaksi.id_barang', '=', 'barang.id')
	->where('transaksi.id',$request->id)->update([
		'pelanggan.nama' => $request->nama,
		'alamat' => $request->alamat,
		'barang.nama' => $request->barang,
		'harga' => $request->harga
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/');
	}

	public function hapus($id){
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('transaksi')->where('id',$id)->delete();
		
	// alihkan halaman ke halaman pegawai
	return redirect('/');
	}
}
