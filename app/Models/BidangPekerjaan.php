<?php

namespace App\Models; // <--- PASTIKAN INI BENAR

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BidangPekerjaan extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika tidak mengikuti standar Laravel (e.g., bidang_pekerjaans)
    protected $table = 'bidang_pekerjaan';

    // Izinkan pengisian massal untuk kolom ini
    protected $fillable = ['nama_bidang', 'slug'];
}