<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class UsersController extends Controller
{
    public function index()
    {
    	 $users = [
    	'0' => [
    			'first_name' => 'Renato',
    			'last_name' => 'Hysa',
    			'location' => 'Albania'
    	],
    	'1' => [
    			'first_name' => 'Jameica',
    			'last_name' => 'Alba',
    			'location' => 'THAILAND'
    	]
    ];
    return view('admin.users.index', compact('users'));
    }

    public function create()
    {
    	return view('admin.users.create');
    }

    public function store(Request $request)
    {
    	User::create($request->all());
    	return 'success';
    	return $request->all();
    }

}


