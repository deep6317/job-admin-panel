<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobPosts;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('job.index');
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
        $jobs = JobPosts::all();
        return \DataTables::of($jobs)
            ->addColumn('Actions', function($data) {})
            ->rawColumns(['Actions'])
            ->make(true);
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
        JobPosts::where('id',$id)->delete();
        return response()->json(["status" => "success", "message" => "Job Deleted Successfully"], 200);
    }

    public function activeJobIndex()
    {
        return view('job.active_job_index');
    }

    public function activeJobs()
    {
        $jobs = JobPosts::whereStatus(1)->get();
        return \DataTables::of($jobs)
            ->make(true);
    }

    public function updateStatus(Request $request)
    {
        $id = $request->id;
        $status = $request->status;

        JobPosts::where('id',$id)->update(['status' => $status]);

        return response()->json(["status" => "success", "message" => "Job Status Updated Successfully"], 200);
    }

    public function viewJob($id)
    {
        $job = JobPosts::where('id',$id)->first();

        return view('job.view_jobs',compact('job'));
    }
}
