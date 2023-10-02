<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SystemController extends Controller
{
    public function index($slug)
    {
        if (!session()->has('user')) {
            return view('index');
        }
        return view('system', ['slug' => $slug]);
    }
}
