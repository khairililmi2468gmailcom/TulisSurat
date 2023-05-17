<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dataSuratModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama', 'tempat_lahir', 'tanggal_lahir', 'pendidikan_terakhir', 'perusahaan', 'posisi', 'tglsurat', 'alamat', 'agama', 'telepon'
    ];
    
     
    
}
