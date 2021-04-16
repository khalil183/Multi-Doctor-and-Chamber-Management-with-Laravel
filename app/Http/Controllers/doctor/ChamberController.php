<?php

namespace App\Http\Controllers\doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\District;
use App\Division;
use App\Category;
use App\Chamber;
use Auth;
class ChamberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chambers=Chamber::where('doctor_id',Auth::guard('doctor')->user()->id)->get();
        return view('doctor.chamber.index',compact('chambers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if($request->ajax()){
            $districts=District::where('division_id',$request->division_id)->get();
            $data='';
            if(count($districts)==0){
                $data.='<option value="">Select District</option>';
            }else{
                for($i=0;$i<count($districts);$i++){
                    $data.= '<option value='.$districts[$i]->id.'>'.$districts[$i]->name.'</option>';
                }
            }
            return response()->json($data);
        }
        $divisions=Division::all();
        $categories=Category::all();
        return view('doctor.chamber.create',compact('divisions','categories'));
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
            'division_id'=>'required',
            'district_id'=>'required',
            'category_id'=>'required',
            'name'=>'required',
            'location'=>'required',
            'map_code'=>'required',
            'start_time'=>'required',
            'end_time'=>'required',
            'day'=>'required',
        ]);

        Chamber::create([
            'doctor_id'=>Auth::guard('doctor')->user()->id,
            'division_id'=>$request->division_id,
            'district_id'=>$request->district_id,
            'category_id'=>$request->category_id,
            'name'=>$request->name,
            'location'=>$request->location,
            'map_code'=>$request->map_code,
            'start_time'=>$request->start_time,
            'end_time'=>$request->end_time,
            'day'=>$request->day,
        ]);

        $notification=array(
            'messege'=>'Created Successfully',
            'alert-type'=>'success'
        );

        return redirect()->route('doctor.chamber.index')->with($notification);
    }


    public function inActiveChamber($id){
        Chamber::where('id',$id)->update([
            'status'=>0
        ]);

        $notification=array(
            'messege'=>'In-Active Successfully',
            'alert-type'=>'success'
        );

        return redirect()->route('doctor.chamber.index')->with($notification);

    }

    public function activeChamber($id){
        Chamber::where('id',$id)->update([
            'status'=>1
        ]);

        $notification=array(
            'messege'=>'Active Successfully',
            'alert-type'=>'success'
        );

        return redirect()->route('doctor.chamber.index')->with($notification);

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
