<?php
namespace App\Lib\Crud;
use App\Http\Controllers\Crud\EmployeeController;
use App\Models\Employee as Model;
use Illuminate\Support\Facades\Log;

class Employee{
    public static function get(array $data):array{
        try{
            // dd($data);
            $result = Model::create($data);
            // dd($result);
            if($result){
                return $result->toArray();
            }else{
                return [];
            }
        }catch(\Exception $e){
            Log::error($e);
        }
    }
    
    public static function show():array{
        try{
            $data = Model::all();
            if($data){
                return $data->toArray();
            }else{
                return [];
            }
        }catch(\Exception $e){
            Log::error($e);
        }
    }

}