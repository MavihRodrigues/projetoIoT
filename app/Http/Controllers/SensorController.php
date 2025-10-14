<?php

namespace App\Http\Controllers;

use App\Models\Sensor;
use Illuminate\Http\Request;

class SensorController extends Controller
{
    public function index()
    {
        $sensores = Sensor::all('codigo', 'descricao', 'status');
        return response()->json($sensores, 200);
    }

    public function showStatus(Request $request)
    {
        $sensor = Sensor::where('codigo', $request->codigo)->first();
        
        if (!$sensor) {
            return response()->json(['error' => 'sem status'], 404);
        }
        return response()->json([
            'success',
            'data' => $sensor->status
        ], 201);
    }
}
