<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
      return view('employee.list');
    }
    public function CREATE()
    {
      return view('employee.create');
    }
}