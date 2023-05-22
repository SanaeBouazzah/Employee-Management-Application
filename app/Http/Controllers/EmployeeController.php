<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    public function index()
    {
      $employees = Employee::orderBy('id', 'ASC')->get();

      return view('employee.list', ['employees' => $employees]);
    }
    public function create()
    {
      return view('employee.create');
    }
    public function store(Request $request)
    {
      $validator = Validator::make($request->all(),[
        'name' => 'required',
        'email' => 'required',
        'address' => 'required',
        'image' => 'sometimes |image:gif,png,jpeg,jpg',
      ]);
        if($validator->passes()){
        //save data
        $employee = new Employee();
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->address = $request->address;
        $employee->save();

        //upload image
        if($request->image){
          $ext = $request->image->getClientOriginalExtension();
          $newFileName = time().'.'.$ext;
          $request->image->move(public_path().'/uploads/employees/', $newFileName);
          $employee->image =  $newFileName;
          $employee->save();
        }

        $request->session()->flash('success', 'Employee added successfuly!!');
        return redirect()->route('employees.index');
      }else{
        // return with errors
        return redirect()->route('employees.create')->withErrors($validator)->withInput();
      }
    }
}
