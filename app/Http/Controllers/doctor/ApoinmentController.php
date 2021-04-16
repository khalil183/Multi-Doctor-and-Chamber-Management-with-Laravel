<?php

namespace App\Http\Controllers\doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Doctor;
use App\Apoinment;
class ApoinmentController extends Controller
{
    public function index()
    {
       $appoinments=Apoinment::all();
       $appoinments= $appoinments->where('date',date('Y-m-d'));
       return view('doctor.appoinment.index',compact('appoinments'));

    }

    public function allAppoinment(){
        $appoinments=Apoinment::all();
       return view('doctor.appoinment.history',compact('appoinments'));
    }


}
