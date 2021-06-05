<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function index()
	{
		$pelanggan = DB::table('pelanggan')
            ->join('transaksi', 'pelanggan.id', '=', 'transaksi.id_pelanggan')
            ->join('barang', 'transaksi.id_barang', '=', 'barang.id')
			->select('transaksi.id as idtransaksi','pelanggan.nama as namapelanggan','pelanggan.alamat','barang.nama as barang','barang.harga')
            ->get();

		return view('home0259',['pelanggan' => $pelanggan]);
	}

	public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
    		
		$pelanggan = DB::table('pelanggan')
		->join('transaksi', 'pelanggan.id', '=', 'transaksi.id_pelanggan')
        ->join('barang', 'transaksi.id_barang', '=', 'barang.id')
		->where('pelanggan.nama','LIKE',"%".$cari."%")
		->select('transaksi.id as idtransaksi','pelanggan.nama as namapelanggan','pelanggan.alamat','barang.nama as barang','barang.harga','pelanggan.nama')
		->paginate();

    		
		return view('home0259',['pelanggan' => $pelanggan]);

	}
}
