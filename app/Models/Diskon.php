<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diskon extends Model
{
    use HasFactory;
    protected $table = 'tbl_diskon';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'total_belanja',
        'diskon',
    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}