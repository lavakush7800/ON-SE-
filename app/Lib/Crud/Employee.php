<?php
namespace App\Lib\Crud;
use App\Http\Controllers\Crud\EmployeeController;
use App\Models\Employee as Model;
use Illuminate\Support\Facades\Log;

class Employee{
    public static function get(array $data){
        try{
            // dd($data);
            $result = Model::create($data);
            return $result;
        }catch(\Exception $e){
            Log::error($e);
        }
    }

}