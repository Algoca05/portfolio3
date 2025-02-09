<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Log;

class TestController extends Controller
{
    public function index()
    {
        try {
            echo 'holas';
            Log::info('TestController@index: Start');
            
            // Verificar la conexión a la base de datos
            if (!\DB::connection()->getDatabaseName()) {
                throw new \Exception('No se puede conectar a la base de datos');
            }
    
            $users = User::all();
            Log::info('TestController@index: Retrieved users', ['count' => $users->count()]);
            return response()->json($users);
        } catch (\Exception $e) {
            Log::error('TestController@index: Error', ['message' => $e->getMessage(), 'trace' => $e->getTraceAsString()]);
            return response()->json(['error' => 'An error occurred'], 500);
        }
    }
}