<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datapenilai extends Model
{
    use HasFactory;

    protected $table = 'datapenilaian';
    protected $fillable = ['nama_alternatif', 'kode', 'nilai'];

    public function datakriteria()
    {
        // Assuming 'kode' is the foreign key in datapenilai table
        return $this->belongsTo(datakriteria::class, 'kode', 'kode');
    }

    public $timestamps = false;
}
