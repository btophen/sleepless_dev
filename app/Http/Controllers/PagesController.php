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

    public function profile()
    {
        return view('pages.profile');
    }

    public function setting()
    {
        return view('pages.setting');
    }
}

