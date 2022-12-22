<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Job;


class EmployeeController extends Controller
{
    public function show_all_employee(){
        return view('employee',['employees'=>Employee::all(),'jobs'=>Job::all()]);
    }

    public function show_edit_employee(Employee $employee){
        return view('edit-employee',['employee'=>$employee,'jobs'=>Job::all()]);
    }

    public function add_employee(Request $request){
        $formFields = $request->only('employee_name','job_id');
        try {
            Employee::create($formFields);
            return redirect('/employee')->with('message','success');
        }catch (Throwable $e) {
            return back()->with('message',"error?");
        }
    }

    public function edit_employee(Request $request,Employee $employee){
        $formFields = $request->validate([
            'employee_name'=> 'required',
            'job_id'=>'required',
        ]);

        $employee->update($formFields);
        return redirect('/employee')->with('message','success edit');
    }

    public function remove_employee(Employee $employee){
        $employee->delete();
        return redirect('/employee')->with("message","employee deleted");
    }
}
