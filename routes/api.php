<?php

use App\Livewire\Ambiente\AmbienteCreate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/ambiente', [AmbienteCreate::class, "store"]);
