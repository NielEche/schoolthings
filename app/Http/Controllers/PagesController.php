<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Products;
use Image;

class PagesController extends Controller
{

    public function about()
    {
        return view('pages.about'); 
    }


    public function delivery()
    {
        return view('pages.delivery'); 
    }


    public function privacy()
    {
        return view('pages.privacy'); 
    }


    public function tc()
    {
        return view('pages.terms'); 
    }

    public function faq()
    {
        return view('pages.faq'); 
    }

    public function help()
    {
        return view('pages.help'); 
    }

    public function sell()
    {
        return view('market.sell'); 
    }


    public function market()
    {
        $products = Products::latest('created_at')->get();
        return view('market.index', compact(['products'])); 
    }
}
