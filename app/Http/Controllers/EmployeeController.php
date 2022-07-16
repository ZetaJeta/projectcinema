<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::get();
        // dd($movies);
        return view('employees.index', ['employees' => $employees]);
        //
        // $rows = Employee::simplePaginate(10);
        // // dd($rows);
        // return view('employees.index', ['rows' => $rows]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEmployeeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $image = $request->file('image');

        $x = $image->move(public_path('assets/img'), $image->getClientOriginalName());
        // $x = $image->move(public_path('images'),uniqid().".jpg");
        //  dd($x);
        $employee = new Employee();
        $employee->name = $request->name;
        $employee->nik = $request->nik;
        $employee->phone_number = $request->phone_number;
        $employee->photo = $x->getFilename();
        $employee->save();
        return redirect('/employees');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        //
        return view('employees.edit', ['employee' => $employee]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEmployeeRequest  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        //
        $isinya = $request->all();
        // dd($isinya);
        $employee->name = $request->name;
        $employee->nik = $request->nik;
        $employee->phone_number = $request->phone_number;
        if ($request->file('photo')) {
            // $movie->cover=$request->file('image');
            $photo = $request->file('photo');
            $employee->photo = $photo->getClientOriginalName();
            $x = $photo->move(public_path('assets/img'), $photo->getClientOriginalName());
        }
        $employee->save();
        return redirect('/employees');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        //
        $employee->delete();
        return redirect('/employees');
    }
}
