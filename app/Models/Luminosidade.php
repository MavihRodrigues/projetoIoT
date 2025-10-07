<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Luminosidade extends Model
{
    use HasFactory;
    protected $fillable = [
        'sensor',
        'valor',
        'umidade'
    ];
}
