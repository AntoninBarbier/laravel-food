<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Meal;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::check()) {
            $meals = Meal::where('user_id', Auth::user()->id)->get();
            return view('home', compact('meals'));
        }
        else {
            return view('index');
        }
    }
}
