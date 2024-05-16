<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = ['id','id_barang','id_pembeli', 'jumlah', 'tanggal'];
    public $timestamp = true;

    public function barangg() {
        return $this->BelongsTo(Barangg::class, 'id_barang');
    }

    public function pembeli() {
        return $this->BelongsTo(Pembeli::class, 'id_pembeli');
    }
}
  