<?php

namespace App\Http\Controllers\Crud;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Lib\Crud\Employee;

class EmployeeController extends Controller
{
    public function index(){
        return view('employee');
    }
    public function store(Request $request){
        try{
            $data = $request->all();
            $fname = $request->image->store('/public');
            // dd($fname);
            $data['image'] =$fname;
            $result = Employee::get($data);
            return redirect('employee',['data'=>$result]);
        }catch(\Exception $e){

        }
    }
    public function show(){
        try{
            $results = Employee::show();
            return view('employeeShow', compact('results'));
        }catch(\Exception $e){

        }
    }
}
