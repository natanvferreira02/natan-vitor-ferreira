<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SistemasController extends Controller
{
    public function ipendIndex()
    {
        return view("sistemas.ipend");
    }
}
