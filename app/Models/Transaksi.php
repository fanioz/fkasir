<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'tbl_transaksi';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'no_transaksi',
        'tgl_transaksi',
        'diskon',
        'uang_pembeli',
        'kembalian',
        'total_bayar'

    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
