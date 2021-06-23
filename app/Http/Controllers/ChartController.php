<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;
use App\User;
use App\Charts\UserChart;

class ChartController extends Controller
{
    public function chart()
    {
        $teams = Team::with('employees', 'employees.report')->orderBy('id', 'desc')->get();
        $sums = [];
        $i = 0;
        $names = [];
        foreach ($teams as $team) {
            $sum = 0;
            $employees = $team->employees;
            foreach ($employees as $emp) {
                $reports = $emp->report;
                foreach ($reports as $rep) {
                    $sum += $rep->rating;
                }
            }
            $sums[$i] = $sum;
            $names[$i] = $team->name;
            $i++;

        }
        return view('chart', ['teams' => $names, 'sums' => $sums]);
    }

    public function attrition()
    {
        $months = ['March', 'April', 'May'];
        $count = [13, 14, 13];
        //вывод статистики
        return view('chartAttrition', ['months' => $months, 'count' => $count]);
    }

}
