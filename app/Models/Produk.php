<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = ['id','nama_produk','jumlah', 'tanggal_produksi', 'id_merek'];
    public $timestamp = true;

    public function merek() {
        return $this->BelongsTo(Merek::class, 'id_merek');
    }
}
