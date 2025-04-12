<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'barang'; // Pastikan sesuai dengan nama tabel
    protected $fillable = ['category_id','nusp', 'nama_barang', 'jumlah', 'satuan', 'stok'];  
    public function permintaan()
{
    return $this->hasMany(Permintaan::class);
}

}
