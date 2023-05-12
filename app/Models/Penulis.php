<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penulis extends Model
{
    use HasFactory;

    protected $table = 'tb_penulis';
    protected $primaryKey = 'id';
    protected $fillable = ['kode', 'nama', 'alamat', 'tanggallahir'];    
}
