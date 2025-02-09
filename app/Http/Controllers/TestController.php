<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Log;

class TestController extends Controller
{
    public function index()
    {
        echo 'hola';
        Log::info('TestController@index: Start');
        $users = User::all();
        Log::info('TestController@index: Retrieved users', ['count' => $users->count()]);
        return response()->json($users);
    }
}