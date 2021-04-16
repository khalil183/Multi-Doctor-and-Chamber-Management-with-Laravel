<?php

namespace App\Http\Controllers\Assistant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Assistant;
use App\Apoinment;
use Auth;
class ApoinmentController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $assistants=Assistant::with('chamber')->where('id',Auth::guard('assistant')->user()->id)->first();

       $assistants= $assistants->chamber->appoinments->where('date',date('Y-m-d'))->where('status',0);
       return view('assistant.appoinment',compact('assistants'));

    }

    public function allAppoinment(){
        $assistants=Assistant::with('chamber')->where('id',Auth::guard('assistant')->user()->id)->first();

        $assistants= $assistants->chamber->appoinments->where('date',date('Y-m-d'));
        return view('assistant.history',compact('assistants'));
    }

    public function approvedAppoinment($id){
        Apoinment::where('id',$id)->update(['status'=>1]);
        $notification=array(
            'messege'=>'Approve Successfully',
            'alert-type'=>'success'
        );

        return redirect()->back()->with($notification);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
