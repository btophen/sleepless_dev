<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use View;

class PagesController extends Controller
{
    public function index()
    {
    	return view('pages.index');
    }

    public function category()
    {
        return view('pages.category');
    }
    
    public function product()
    {
        return view('pages.product');
    }
    public function about()
    {
        return view('pages.about');
    }
    public function contact()
    {
        return view('pages.contact');
    }
       public function login()
    {
        return view('pages.login');
    }
    public function register()
    {
        return view('pages.register');
    }
      public function sitemap()
    {
        return view('pages.sitemap');
    }
    public function checkout()
    {
        return view('pages.checkout');
    }



   
}

