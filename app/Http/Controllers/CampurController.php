<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CampurController extends Controller
{
    public function aboutus() {
        return view ('aboutus.index');
    }
}
