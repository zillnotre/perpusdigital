<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori_buku extends Model
{
    use HasFactory;
    protected $table = 'kategori_buku';
    protected $primarykey = 'id';
    protected $fillable = 'nama_kategori';

}
