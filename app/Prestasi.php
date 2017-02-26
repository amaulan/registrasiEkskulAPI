<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model
{
    protected $table = 'prestasi';
    protected $fillable  = [
        'prestasi_nama',
        'desc',
        'ekskul_id'
    ];

    public function ekskul()
    {
        return $this->hasOne(App\Ekskul::class);
    }
}
