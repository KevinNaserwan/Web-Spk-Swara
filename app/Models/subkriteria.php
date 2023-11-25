<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subkriteria extends Model
{
    use HasFactory;
    protected $table = 'subkriteria';
    protected $fillable = ['kode', 'nama', 'nilai'];

    public $timestamps = false;
}
