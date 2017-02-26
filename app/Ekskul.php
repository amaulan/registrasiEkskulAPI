<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ekskul extends Model
{
    protected $table = 'ekskul';
    protected $fillable = [
        'ekskul_nama',
        'pembina',
        'desc',
        'picture'
    ];

    public function user()
    {
        return $this->belongsToMany(\App\User::class,'siswa_ekskul','ekskul_id','id');
    }
}
