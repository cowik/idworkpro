<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JobSeekers;
use Yajra\DataTables\Facades\DataTables;

class JobSeekersController extends Controller
{
    public function index(){
        return view('jobseekers/jobseekers');
    }

    public function getjobseekers(Request $request){

        $query = $request->get('name');
        if($request->has('name') && $request->has('submit')){
            $jobseekers = \App\JobSeekers::select('jobseekers.*')
            ->where("name","ILIKE","%".$request->name."%");

            return Datatables::of($jobseekers)
                ->addColumn('action',function($j){
                    return '';
                })
            ->rawColumns(['action'])
            ->toJson();
        }
        else{
            $jobseekers = \App\JobSeekers::select('jobseekers.*');

            return Datatables::of($jobseekers)
            ->addColumn('action',function($j){
                return '';
            })
            ->rawColumns(['action'])
            ->toJson();
        }
    }

    public function insert(Request $request){

        if($request->hasFile('profilephoto') && $request->hasFile('idphoto')){
            $request->file('profilephoto')->move('images/', $request->file('profilephoto')->getClientOriginalName());  
            $request->file('idphoto')->move('images/', $request->file('idphoto')->getClientOriginalName());  
        }
        
        \App\JobSeekers::create($request->all());
        return redirect('jobseekers')->with('success', 'Input Success !');
    }
}
