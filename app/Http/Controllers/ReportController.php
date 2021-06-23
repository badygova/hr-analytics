<?php

namespace App\Http\Controllers;

use App\Report;
use App\Team;

class ReportController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        //1 sem
        //performance
        $reports11p = Report::with('employee', 'employee.team')->where('period', '1')->where('criterion', 'performance')
            ->where('rating', '1')->get();
        $reports12p = Report::with('employee', 'employee.team')->where('period', '1')->where('criterion', 'performance')
            ->where('rating', '2')->get();
        $reports13p = Report::with('employee', 'employee.team')->where('period', 1)->where('criterion', 'performance')
            ->where('rating', '3')->get();
        $reports14p = Report::with('employee', 'employee.team')->where('period', '1')->where('criterion', 'performance')
            ->where('rating', '4')->get();
        //competence
        $reports11c = Report::with('employee', 'employee.team')->where('period', '1')->where('criterion', 'competence')
            ->where('rating', '1')->get();
        $reports12c = Report::with('employee', 'employee.team')->where('period', '1')->where('criterion', 'competence')
            ->where('rating', '2')->get();
        $reports13c = Report::with('employee', 'employee.team')->where('period', 1)->where('criterion', 'competence')
            ->where('rating', '3')->get();
        $reports14c = Report::with('employee', 'employee.team')->where('period', '1')->where('criterion', 'competence')
            ->where('rating', '4')->get();

        //2sem
        //performance
        $reports21p = Report::with('employee', 'employee.team')->where('period', '2')->where('criterion', 'performance')
            ->where('rating', '1')->get();
        $reports22p = Report::with('employee', 'employee.team')->where('period', '2')->where('criterion', 'performance')
            ->where('rating', '2')->get();
        $reports23p = Report::with('employee', 'employee.team')->where('period', '2')->where('criterion', 'performance')
            ->where('rating', '3')->get();
        $reports24p = Report::with('employee', 'employee.team')->where('period', '2')->where('criterion', 'performance')
            ->where('rating', '4')->get();
        //competence
        $reports21c = Report::with('employee', 'employee.team')->where('period', '2')->where('criterion', 'competence')
            ->where('rating', '1')->get();
        $reports22c = Report::with('employee', 'employee.team')->where('period', '2')->where('criterion', 'competence')
            ->where('rating', '2')->get();
        $reports23c = Report::with('employee', 'employee.team')->where('period', '2')->where('criterion', 'competence')
            ->where('rating', '3')->get();
        $reports24c = Report::with('employee', 'employee.team')->where('period', '2')->where('criterion', 'competence')
            ->where('rating', '4')->get();

        $teams = Team::orderBy('id', 'desc')->get();

        return view('report.index', [
            'reports11p' => $reports11p,
            'reports12p' => $reports12p,
            'reports13p' => $reports13p,
            'reports14p' => $reports14p,
            'reports11c' => $reports11c,
            'reports12c' => $reports12c,
            'reports13c' => $reports13c,
            'reports14c' => $reports14c,
            'reports21p' => $reports21p,
            'reports22p' => $reports22p,
            'reports23p' => $reports23p,
            'reports24p' => $reports24p,
            'reports21c' => $reports21c,
            'reports22c' => $reports22c,
            'reports23c' => $reports23c,
            'reports24c' => $reports24c,
            'teams' => $teams]);

    }
}

