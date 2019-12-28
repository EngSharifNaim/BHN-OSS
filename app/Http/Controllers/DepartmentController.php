<?php

namespace App\Http\Controllers;

use App\Department;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use MongoDB\BSON\Timestamp;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users=User::all();
        $departments = Department::where('deleted_at',Null)->get();
        return view('department.index',compact('departments','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=User::all();
        $departments = Department::where('deleted_at',Null)->get();
        return view('department.creat',compact('users','departments'));
        //return Department::create([
         //   'name' => $data['name']
        //]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $departments = Department::where('deleted_at',Null)->get();
        $users=User::all();

        $data = $request->all();
        Department::create($data);
        return view('department.index',compact('departments','users'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
       // $data = $request->all();

        $departments = Department::findOrFail($id);
            //return ($departments);
        $users=User::all();
        return view('department.edit',compact('users','departments'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data = $request->all();
        $users=User::all();
        $departments = Department::where('deleted_at',Null)->get();

        Department::find($id)->update($request->all());
        return view('department.index',compact('users','departments'));


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy($department)
    {
        $department = Department::findOrFail($department);
        $department->deleted_at = Carbon::now();
        $department->save();

        $departments = Department::where('deleted_at',Null)->get();
        $users = User::all();
        return view('department.index',compact('users','departments'));
    }
}
