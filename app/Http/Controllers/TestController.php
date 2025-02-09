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
            echo 'hola';
            Log::info('TestController@index: Start');
            $users = User::all();
            Log::info('TestController@index: Retrieved users', ['count' => $users->count()]);
            return response()->json($users);
        } catch (\Exception $e) {
            Log::error('TestController@index: Error', ['message' => $e->getMessage()]);
            return response()->json(['error' => 'An error occurred'], 500);
        }
    }
}