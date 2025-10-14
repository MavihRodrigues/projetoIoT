<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;
    protected $fillable = [
        'status'
    ];

    if ($status == 0) {
        echo "ON";

    } else {
     echo "OFF";
}

    public function registros()
    {
        return $this->hasMany(Registro::class);
    }

    public function ambiente()
    {
        return $this->belongsTo(Ambiente::class);
    }
}