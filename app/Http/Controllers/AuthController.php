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
                    $user = $request->user();
                    session(['user' => $user]);
                    return response()->json([
                        'message' => 'Redirecionando para a rota lotocionograma-index.',
                        'redirect' => route('lotocionograma-index')
                    ], 302);
                }
            }

            return response()->json(['Negado' => 'Credenciais erradas']);

        } catch (\Exception $e) {
            return response()->json(['error' => 'Ocorreu um erro durante o login', 'message' => $e->getMessage()], 500);
        }
    }

    public function logout () {
        session()->forget('user');
        return redirect('/');
    }
}
