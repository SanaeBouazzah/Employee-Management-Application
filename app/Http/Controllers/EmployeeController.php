<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
      $Validator = 
    }
}
