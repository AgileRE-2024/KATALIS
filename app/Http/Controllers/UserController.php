<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User; 

class UserController extends Controller
{
    public function getUser(Request $request)
    {
        $user = User::where('nim', $request->nim)->first();

        if ($user) {
            return response()->json([
                'success' => true,
                'data' => [
                    'name' => $user->name,
                    'no_hp' => $user->no_hp,
                ],
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'NIM not found',
        ]);
    }

}