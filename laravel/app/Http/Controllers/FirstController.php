<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function serverInfo() { 
      return response()->json([
        'php_version' => phpversion()
      ]);
    }

    public function clientInfo(Request $request) {
      return response()->json([
        'id_address' => $request->ip(),
        'user_agent' => $request->header('User-Agent')
      ]);
    }

    public function databaseInfo() {
      return response()->json([
        'database_connection' => config('database.default'),
        'database_name' => config('database.connections.' . config('database.default') . '.database')
      ]);
    }
}
