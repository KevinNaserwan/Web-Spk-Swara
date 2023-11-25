<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datakriteria extends Model
{
    use HasFactory;
    protected $table = 'datakriteria';
    protected $fillable = ['kode', 'nama', 'bobot', 'bobot_swara', 'jenis'];

    public function datapenilai()
    {
        // Assuming 'kode' is the foreign key in datakriteria table
        return $this->hasOne(datapenilai::class, 'kode', 'kode');
    }

    public $timestamps = false;
}
