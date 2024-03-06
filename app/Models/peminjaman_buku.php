<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peminjaman_buku extends Model
{
    use HasFactory;
    protected $table = 'peminjaman_buku';
    //protected $primarykey = 'id';

    protected $fillable = ['user_id', 'buku_id','tanggal_peminjaman','tanggal_pengembalian','status_peminjaman'];

    
}

