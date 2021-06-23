<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Exports\RatingsExport;
use App\Rating;
use App\Report;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;


class RatingController extends Controller
{
    use ValidatesRequests;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $ratings = Rating::with('user', 'employee', 'employee.team')->orderBy('id', 'desc')->get();

        return view('rating.index')->with('ratings', $ratings);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $employees = Employee::orderBy('id', 'desc')->get();
        return view('rating.create')->with('employees', $employees);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function store(Request $request)
    {
        //проверка есть ли уже такая запись от этого автора, этому эмп, по критерию и за период
        //если есть, то ошибка
        //если нет, то запись

        Rating::create(['employee_id'=> $request->employee_id, 'user_id'=> Auth::user()->id,
            'criterion'=> $request->criterion, 'rating'=> $request->rating,
            'period' => $request->period, 'comment' => $request->comment]);

        $report = Report::where('employee_id', $request->employee_id)
            ->where('criterion', $request->criterion)
            ->where('period', $request->period)->first();

        if($report) {

            $report->rating = ceil(($report->rating + $request->rating)/2);
            $report->save();
        } else {

            Report::create($request->all());
        }

        $ratings = Rating::with('user', 'employee')->orderBy('id', 'desc')->get();

        return view('rating.index')->with('ratings', $ratings);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        return view('rating.profile', ['rating' => Rating::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $employees = Employee::orderBy('id', 'desc')->get();
        return view('rating.edit', ['rating' => Rating::findOrFail($id), 'employees' => $employees]);
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
        $rating = Rating::findOrFail($id);

        $rating->update($request->all());
        return view('rating.profile', ['rating' => Rating::findOrFail($id)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function destroy($id)
    {
        $rating = Rating::findOrFail($id);
        $rating->delete();

        $ratings = Rating::with('user', 'employee')->orderBy('id', 'desc')->get();

        return view('rating.index')->with('ratings', $ratings);
    }

    public function export()
    {
        return Excel::download(new RatingsExport, 'rating.xlsx');
    }
}

