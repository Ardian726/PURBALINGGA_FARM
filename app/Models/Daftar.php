<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daftar extends Model
{
    use HasFactory;
    protected $table = 'daftar';
    protected $fillable = ['nama', 'alamat', 'no_hp', 'email', 'jenis_harga', 'jangka_waktu', 'besar_tabungan', 'tanggal_pembayaran', 'alamat_pengiriman'];
}
