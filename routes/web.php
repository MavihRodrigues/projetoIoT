<?php

use App\Livewire\Ambiente\AmbienteCreate;
use App\Livewire\Dashboard;
use App\Livewire\SensorCreate;
use App\Models\Sensor;
use Illuminate\Support\Facades\Route;

Route::get('/', Dashboard::class);

Route::get('/sensor', SensorCreate::class);

// Route::get('/sensor/index', SensorDashboardSensor::class);