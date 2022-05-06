<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Image;

class PagesController extends Controller
{
    public function market()
    {
        return view('market.index'); 
    }
}
