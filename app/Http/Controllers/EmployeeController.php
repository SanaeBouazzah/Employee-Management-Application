<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    public function index()
    {
      return view('employee.list');
    }
    public function create()
    {
      return view('employee.create');
    }
    public function store(Request $request)
    {
      $Validator = Validator::make($request->all(),[
        'name' => 'required',
        'email' => 'required',
        'address' => 'required',
        'image' => 'sometimes |image:gif,png,jpeg,jpg',
      ]);
    }
}
