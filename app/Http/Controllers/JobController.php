<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    public function show_all_job(){
        return view('job',['jobs'=>Job::all()]);
    }

    public function show_edit_job(Job $job){
        return view('edit-job',['job'=>$job]);
    }

    public function add_job(Request $request){
        $formFields = $request->only('job_name','division');
    
        try {
            Job::create($formFields);
            return redirect('/job')->with('message','success');
        }catch (Throwable $e) {
            return back()->with('message',"error?");
        }
    }

    public function edit_job(Request $request,Job $job){
        $formFields = $request->validate([
            'job_name'=> 'required',
            'division'=>'required',
        ]);

        $job->update($formFields);
        return redirect('/job')->with('message','success edit');
    }

    public function remove_job(Job $job){
        $job->delete();
        return redirect('/job')->with("message","job deleted");
    }
}
