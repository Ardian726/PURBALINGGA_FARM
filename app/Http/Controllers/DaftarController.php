<?php

namespace App\Http\Controllers;

use App\Models\Daftar;
use Illuminate\Http\Request;
use App\Models\Silat;

class DaftarController extends Controller
{

    public function index()
    {
        return view('daftar');
    }

    public function dashboard()
    {
        $daftar = Daftar::get();
        return view('dashboard', compact('daftar'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama'               => 'required',
            'alamat'             => 'required',
            'no_hp'              => 'required',
            'email'              => 'required',
            'jenis_harga'        => 'required',
            'jangka_waktu'       => 'required',
            'besar_tabungan'     => 'required',
            'tanggal_pembayaran' => 'required',
            'alamat_pengiriman'  => 'required_without:alamat_pengiriman_checkbox',
        ]);

        $daftar = new Daftar();

        $daftar->nama               = $request->nama;
        $daftar->alamat             = $request->alamat;
        $daftar->no_hp              = $request->no_hp;
        $daftar->email              = $request->email;
        $daftar->jenis_harga        = $request->jenis_harga;
        $daftar->jangka_waktu       = $request->jangka_waktu;
        $daftar->besar_tabungan     = $request->besar_tabungan;
        $daftar->tanggal_pembayaran = $request->tanggal_pembayaran;
        $daftar->alamat_pengiriman  = $request->alamat_pengiriman ?? $request->alamat_pengiriman_checkbox;

        $daftar->save();

        return redirect()->to('/daftar')->with('success', 'Pendaftaran Berhasil Dilakukan');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
