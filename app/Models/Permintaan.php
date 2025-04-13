<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permintaan extends Model
{
    use HasFactory;
    protected $table = 'permintaan'; // default, bisa dihapus kalau nama tabel sesuai

    protected $fillable = [
        'user_id',
        'barang_id',
        'status',
        'keterangan',
        'tanggal_diambil',
    ];

    // Relasi
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }
}
