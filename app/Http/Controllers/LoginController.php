<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login() {
        return response()->json(['message' => 'Esta é uma resposta de exemplo da API.']);
    }
}
