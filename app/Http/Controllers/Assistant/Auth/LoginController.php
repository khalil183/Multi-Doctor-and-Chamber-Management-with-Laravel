<?php

namespace App\Http\Controllers\Assistant\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use App\Doctor;
use App\Assistant;
use Hash;
class LoginController extends Controller
{



    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::ASSISTANT;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:assistant')->except('logout','assistantLogout');
    }


    public function showAssistantLoginForm(){
        return view('assistant.auth.login');
    }

    public function assistantLogin(Request $request){
        $this->validate($request,[
            'email'=>'required|string',
            'password'=>'required|string',
        ]);

        $credential=[
            'email'=> $request->email,
            'password'=> $request->password
        ];

        $assistant=Assistant::where('email',$request->email)->first();
        if($assistant->status==1){
            if(Hash::check($request->password,$assistant->password)){
                if(Auth::guard('assistant')->attempt($credential,$request->remember)){
                    return Redirect()->intended(route('assistant.dashboard'));
                }
                return Redirect()->back()->withInput($request->only('email,remember'));
            }else{
                return redirect()->back()->with(['error'=>'Email Or Password Does not exist!!']);
            }

        }else{
            return redirect()->back()->with(['error'=>'Your Id Is Not Activate, Wait for Activation']);
        }


    }

    public function assistantLogout(){
        Auth::guard('assistant')->logout();
        return redirect()->route('assistant.login');
    }
}
