<?php

use App\Http\Controllers\LuminosidadeController;
use App\Http\Controllers\RegistroController;
use App\Livewire\Ambiente\AmbienteCreate;
use App\Livewire\Luminosidade\LuminosidadeCreate;
use App\Livewire\Registro\RegistroCreate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/ambiente', [AmbienteCreate::class, "store"]);

Route::post('/registro/create', [RegistroController::class, "store"]);