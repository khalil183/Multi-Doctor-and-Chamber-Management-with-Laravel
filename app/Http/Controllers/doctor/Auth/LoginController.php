<?php

namespace App\Http\Controllers\doctor\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use App\Doctor;
use Hash;
class LoginController extends Controller
{



    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::DOCTOR;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:doctor')->except('logout','doctorLogout');
    }


    public function showDoctorLoginForm(){
        return view('doctor.auth.login');
    }

    public function doctorLogin(Request $request){
        $this->validate($request,[
            'email'=>'required|string',
            'password'=>'required|string',
        ]);

        $credential=[
            'email'=> $request->email,
            'password'=> $request->password
        ];

        $doctor=Doctor::where('email',$request->email)->first();
        if($doctor->status==1){
            if(Hash::check($request->password,$doctor->password)){
                if(Auth::guard('doctor')->attempt($credential,$request->remember)){
                    return Redirect()->intended(route('doctor.dashboard'));
                }
                return Redirect()->back()->withInput($request->only('email,remember'));
            }else{
                return redirect()->back()->with(['error'=>'Email Or Password Does not exist!!']);
            }

        }else{
            return redirect()->back()->with(['error'=>'Your Id Is Not Activate, Wait for Activation']);
        }


    }

    public function doctorLogout(){
        Auth::guard('doctor')->logout();
        return redirect()->route('doctor.login');
    }
}
