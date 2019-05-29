<?php

namespace App\Http\Controllers;

use App\income;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Current Date -15 To Current Date +15
        // Get Income
        $incomes = Income::all();

        // Current Balance
        return view('home', ['incomes' => $incomes]);
    }
}
