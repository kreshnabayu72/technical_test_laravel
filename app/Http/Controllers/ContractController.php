<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contract;
use App\Models\Employee;

class ContractController extends Controller
{
    public function show_all_contract(){
        return view('contract',['contracts'=>Contract::all(),'employees'=>Employee::all()]);
    }

    public function show_edit_contract(Contract $contract,){
        return view('edit-contract',['contract'=>$contract,'employees'=>Employee::all()]);
    }

    public function add_contract(Request $request){
        $formFields = $request->only('contract_detail','employee_id','expired_at');
    
        try {
            Contract::create($formFields);
            return redirect('/contract')->with('message','success');
        }catch (Throwable $e) {
            return back()->with('message',"error?");
        }
    }

    public function edit_contract(Request $request,Contract $contract){
        $formFields = $request->validate([
            'contract_detail'=> 'required',
            'employee_id'=>'required',
        ]);

        $contract->update($formFields);
        return redirect('/contract')->with('message','success edit');
    }


    public function remove_contract(Contract $contract){
        $contract->delete();
        return redirect('/contract')->with("message","contract deleted");
    }
}
