<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori_relasi extends Model
{
    use HasFactory;
    protected $table = 'kategori_relasi';
    protected $primaryKey = 'id';
    protected $fillable = ['buku_id', 'kategori_id'];
}