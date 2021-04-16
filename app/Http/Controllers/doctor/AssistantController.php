<?php

namespace App\Http\Controllers\doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Assistant;
use App\Doctor;
use App\Chamber;
use Auth;
use Hash;
class AssistantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assistants=Assistant::where('doctor_id',Auth::guard('doctor')->user()->id)->get();
        return view('doctor.assistant.index',compact('assistants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $chambers=Chamber::where('doctor_id',Auth::guard('doctor')->user()->id)->get();
        return view('doctor.assistant.create',compact('chambers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'chamber_id'=>'required',
            'name'=>'required',
            'email'=>'required|unique:assistants',
            'phone'=>'required|unique:assistants',
            'password'=>'required|min:6',
            'address'=>'required',

        ]);

        Assistant::create([
            'doctor_id'=>Auth::guard('doctor')->user()->id,
            'chamber_id'=>$request->chamber_id,
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'password'=>Hash::make($request->password),

        ]);

        $notification=array(
            'messege'=>'Created Successfully',
            'alert-type'=>'success'
        );

        return redirect()->route('doctor.assistant.index')->with($notification);
    }


    public function inActiveAssistant($id){
        Assistant::where('id',$id)->update([
            'status'=>0
        ]);

        $notification=array(
            'messege'=>'In-Active Successfully',
            'alert-type'=>'success'
        );

        return redirect()->route('doctor.assistant.index')->with($notification);

    }

    public function activeAssistant($id){
        Assistant::where('id',$id)->update([
            'status'=>1
        ]);

        $notification=array(
            'messege'=>'Active Successfully',
            'alert-type'=>'success'
        );

        return redirect()->route('doctor.assistant.index')->with($notification);

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
