<?php

namespace App\Http\Controllers;

use App\Models\Sensor;
use Illuminate\Http\Request;

class SensorController extends Controller
{
    public function show(Sensor $request)
    {
        $sensor = Sensor::where('codigo', $request->codigo)->first();

        if (!$sensor) {
            return response()->json(['error' => 'sensor não encontrado'], 404);
        }
        return response()->json([
            'success' => 'registro salvo com sucesso',
            'data' => $sensor
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $sensor = Sensor::find($id);
        $sensor->update($request->all());
        return response()->json($sensor, 200);
    }
}
