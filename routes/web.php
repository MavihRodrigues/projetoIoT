<?php

use App\Livewire\Ambiente\AmbienteCreate;
use App\Livewire\Dashboard;
use App\Livewire\SensorDashboard\Sensor as SensorDashboardSensor;
use App\Models\Sensor;
use Illuminate\Support\Facades\Route;

Route::get('/', Dashboard::class);

Route::get('/sensor', SensorDashboardSensor::class);