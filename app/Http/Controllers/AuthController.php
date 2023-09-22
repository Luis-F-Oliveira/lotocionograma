<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request) 
    {
        try {
            $credentials = $request->only('email', 'password');

            if ($credentials) {
                if (Auth::attempt($credentials)) {
                    return response()->json(['credenciais' => $credentials]);
                }
            }

        //             return response()->json(['entrei']);

        //         return response()->json([$credentials]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Ocorreu um erro durante o login', 'message' => $e->getMessage()], 500);
        }
    }
}

// $credentials = $request->only('email', 'password');

// if (Auth::attempt($credentials)) {
//     $user = $request->user();
//     $token = $user->createToken('authToken')->plainTextToken;

//     return response()->json(['user' => $user, 'token' => $token]);
// }

// return response()->json(['message' => 'Credenciais inválidas'], 401);
