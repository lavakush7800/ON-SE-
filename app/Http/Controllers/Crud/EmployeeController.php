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
            // dd($data);
            $result = Employee::get($data);
            return redirect('employee');
        }catch(\Exception $e){

        }
    }
}
