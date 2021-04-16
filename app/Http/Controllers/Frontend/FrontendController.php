<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use Image;
use App\Doctor;
use App\Chamber;
use App\Apoinment;
use App\Division;
use App\District;
use Hash;
class FrontendController extends Controller
{
    public function index(){
        $categories=Category::all();
        $districts=District::all();
        $divisions=Division::all();
        $doctors=Doctor::where('status',1)->get();
        return view('frontend.index',compact('categories','doctors','districts','divisions'));
    }

    public function registrationForm(){
        $categories=Category::all();
        return view('frontend.registration',compact('categories'));
    }

    public function doctorRegistration(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|unique:doctors',
            'phone'=>'required|unique:doctors',
            'password'=>'required',
            'institute'=>'required',
            'education'=>'required',
            'experience'=>'required',
            'category'=>'required',
            'address'=>'required',
            'bio'=>'required',
        ]);


        $image=$request->file('image');
        $ext=$image->getClientOriginalExtension();
                $name= date('Y-m-d-h-i-s-').rand(999,9999).'.'.$ext;
                $path='public/uploads/doctors/';
                $upload_path=$path.$name;
                $up=Image::make($image)
                        ->resize(263,260)
                        ->save($upload_path);

        Doctor::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'password'=>Hash::make($request->password),
            'institute'=>$request->institute,
            'education'=>$request->education,
            'experience'=>$request->experience,
            'category_id'=>$request->category,
            'address'=>$request->address,
            'bio'=>$request->bio,
            'image'=>$upload_path,
        ]);

        return redirect()->route('doctor.login')->with(['success'=>'Registration Successfully , Please Login Here']);

    }

    public function doctorDetails($id){
        $doctor=Doctor::find($id);
        return view('frontend.doctorDetails',compact('doctor'));
    }

    public function chambers(Request $request){
        $chambers=Chamber::where('status',1);
        if($request->district)$chambers=$chambers->where('district_id',$request->district);
        if($request->division)$chambers=$chambers->where('division_id',$request->division);
        if($request->category)$chambers=$chambers->where('category_id',$request->category);
        $chambers=$chambers->get();
        return view('frontend.chambers',compact('chambers'));
    }

    public function chamberDetails($id){
        $chamber=Chamber::find($id);
        return view('frontend.chamberDetails',compact('chamber'));
    }

    public function createAppoinment(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'phone'=>'required',
            'date'=>'required',
            'address'=>'required',
        ]);
        $serial=Apoinment::where(['date'=>$request->date,'chamber_id'=>$request->chamber_id])->count()+1;
        Apoinment::create([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'serial_number'=>$serial,
            'date'=>$request->date,
            'chamber_id'=>$request->chamber_id,
        ]);

        return redirect()->back()->with(['serialSuccess'=>'Your Serial Number Is: '.$serial]);

    }
}
