<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MostFamousController extends Controller
{
    public function index() {
        return view('famous.index', [
            'title' => 'E-Library | Most Famous Author',
        ]);
    }
}
