<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JobSeekers;

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
                    return '<a class="btn btn-primary btn-sm" href="#">
                                <i class="fas fa-folder">
                                </i>
                                View
                            </a>
                            <a class="btn btn-info btn-sm" href="/jobseekers/'.$j->id.'/edit">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <a class="btn btn-danger btn-sm delete" href="#" jobseekersid="'.$j->id.'">
                                <i class="fas fa-trash">
                                </i>
                                Delete
                            </a>';
                })
            ->rawColumns(['action'])
            ->toJson();
        }
        else{
            $jobseekers = \App\JobSeekers::select('jobseekers.*');

            return Datatables::of($jobseekers)
            ->addColumn('action',function($j){
                return '<a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-folder">
                            </i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" href="/jobseekers/'.$j->id.'/edit">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm delete" href="#" jobseekersid="'.$j->id.'">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </a>';
            })
            ->rawColumns(['action'])
            ->toJson();
        }
    }

    public function insert(Request $request){
        \App\JobSeekers::create($request->all());
        return redirect('jobseekers')->with('success', 'Input Success !');
    }
}
