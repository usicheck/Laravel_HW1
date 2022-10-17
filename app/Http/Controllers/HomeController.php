<?php

namespace App\Http\Controllers;

use App\Services\Contracts\UserInfoContract;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UserInfoContract $contract)
    {
        $this->contract = $contract;
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $this->contract->generate();

        return view('home');
    }
}
