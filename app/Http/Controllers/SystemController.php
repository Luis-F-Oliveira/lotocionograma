<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SystemController extends Controller
{
    public function index()
    {
        if (!session()->has('user')) {
            return redirect('/');
        }
        return view('system');
    }
}
