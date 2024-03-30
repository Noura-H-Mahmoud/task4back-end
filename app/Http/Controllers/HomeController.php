<?php

namespace App\Http\Controllers;
use App\Models\User;
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
        return view('home');
    }
    public function employees()
    {
        return view('employees');
    }
    public function user()
{
    $employees = User::select('id', 'name', 'email', 'admin', 'created_at', 'updated_at')->get();
    return view('user', compact('employees'));
}
}
