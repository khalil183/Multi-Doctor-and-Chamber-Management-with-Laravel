<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $doctors=Doctor::where('status',0)->get();
        return view('admin.dashboard',compact('doctors'));
    }


}
