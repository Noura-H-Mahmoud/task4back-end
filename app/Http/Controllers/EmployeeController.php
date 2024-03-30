<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin')->only('add','edit','delete');
    }
   
    public function define(Request $request){
        $employees = User::select('id', 'name', 'email', 'admin', 'created_at', 'updated_at')->get();
        return view('employees',compact('employees'));
    }
    // add new employee
    public function add()
    {
        return view('create');
    }
    public function store(StoreUserRequest $request)
    {
        $employee=new User();
        $employee->name=$request->name;
        $employee->email=$request->email;
        $employee->password = bcrypt($request->password);
        $employee->admin=$request->admin;
        $employee->save();
        return redirect()->route('define');
    }

    //edit old employee
    public function edit($id)
    {   
        $employee=User ::findOrFail($id);
        return view('edit', compact('employee'));
    }
    public function update(UpdateUserRequest $request,$id)
    {
        $employee=User::findOrFail($id);
        $employee->update($request->all());
        return redirect('/employees/define')->with('Employee is updated');
    }

    //delete old employee
    public function delete($id)
    {
        $employee=User::findOrFail($id);
        $employee->delete();
        return redirect('/employees/define')->with('Employee is deleted');
    }
}
