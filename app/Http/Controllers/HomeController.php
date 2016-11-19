<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth:api');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function Userctrl()
    {
        $user = User::find(1);

        // Creating a token without scopes...
        $token = $user->createToken('Token Name')->accessToken;

        echo "<pre>"; var_dump($token); echo "</pre>"; die("123");
    }
}
