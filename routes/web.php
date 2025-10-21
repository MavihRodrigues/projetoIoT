<?php

use App\Livewire\Ambiente\AmbienteCreate;
use App\Livewire\Ambiente\AmbienteEdit;
use App\Livewire\Ambiente\AmbienteIndex;
use App\Livewire\Dashboard;
use App\Livewire\Sensor\SensorCreate;
use App\Livewire\Sensor\SensorEdit;
use App\Livewire\Sensor\SensorIndex;
use App\Livewire\Sensor\SensorStatus;
use Illuminate\Support\Facades\Route;

Route::get('/', Dashboard::class);

Route::prefix('ambientes')->group(function () {
    Route::get('/index', AmbienteIndex::class)->name('ambientes.index');
    Route::get('/create', AmbienteCreate::class)->name('ambientes.create');
    Route::get('/edit/{ambiente_id}', AmbienteEdit::class)->name('ambientes.edit');
});

Route::prefix('sensores')->group(function () {
    Route::get('/index', SensorIndex::class)->name('sensores.index');
    Route::get('/create', SensorCreate::class)->name('sensores.create');
    Route::get('/edit/{ambiente_id}', SensorEdit::class)->name('sensores.edit');
    Route::get('/status', SensorStatus::class)->name('sensores.index');
});

Route::get('/sensor/status', function () {
    return view('sensor.status');
});

// Route::prefix('registros')->group(function () {
//     Route::get('/index', RegistroIndex::class)->name('registros.index');
// });
