<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    protected $fillable = [
        'sensor_id',
        'valor',
        'unidade',
        'data_hora'
    ];

<<<<<<< HEAD
    protected $cast = [
=======
    protected $casts = [
>>>>>>> b6f963a4e10e9b8dbe4a74461f621fb2f1a44458
        'data_hora' => 'datetime'
    ];

    public function sensor()
    {
        return $this->belongsTo(Sensor::class);
    }
}
