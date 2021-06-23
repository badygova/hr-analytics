<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Team;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Exports\EmployeesExport;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;


class EmployeeController extends Controller
{
    use ValidatesRequests;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $employees = Employee::with('team')->orderBy('id', 'desc')->get();

        return view('employee.index')->with('employees', $employees);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $teams = Team::orderBy('id', 'desc')->get();
        return view('employee.create')->with('teams', $teams);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function store(Request $request)
    {
        Employee::create($request->all());
        $employees = Employee::with('team')->orderBy('id', 'desc')->get();

        return view('employee.index')->with('employees', $employees);
    }

    public function storeImage(Request $request)
    {
        $path = Storage::disk('s3')->put('/',$request->image, 'public');
        //$path = $request->file('image')->store('profile', 'public');
        $employee = Employee::findOrFail($request->id);
        $employee->image = $path;
        $employee->save();
        $employees = Employee::with('team')->orderBy('id', 'desc')->get();

        return view('employee.index')->with('employees', $employees);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $employee = Employee::with('team')->findOrFail($id);
        $path = $employee->image;
        return view('employee.profile', ['employee' => $employee, 'path' => $path]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $teams = Team::orderBy('id', 'desc')->get();
        return view('employee.edit', ['employee' => Employee::findOrFail($id), 'teams' => $teams]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function update(Request $request, $id)
    {
        $employee = Employee::findOrFail($id);

        $employee->update($request->all());
        return view('employee.profile', ['employee' => Employee::with('team')->findOrFail($id)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function destroy($id)
    {
        Employee::destroy($id);

        $employees = Employee::with('team')->orderBy('id', 'desc')->get();

        return view('employee.index')->with('employees', $employees);
    }

    public function export()
    {
        return Excel::download(new EmployeesExport, 'employees.xlsx');
    }
}
