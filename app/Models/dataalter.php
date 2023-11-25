<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dataalter extends Model
{
    use HasFactory;
    protected $table = 'dataalternatif';
    protected $fillable = ['nama_alternatif'];

    public $timestamps = false;
}
