@extends('layouts.app')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

@section('content')
    <div class="container">
        <form action="/employee" method="POST">
            {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Name</label>
            <input type="text" class="form-control" name="name" id="name">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email">
        </div>

        <div class="form-group">
            <label for="role">Department</label>
            <select class="form-control" name="department" id="department">
                <option value="1">Research & Development</option>
                <option value="2">Sales</option>
                <option value="3">Human Resources</option>
                <option value="4">Other</option>
            </select>
        </div>
            <div class="form-group">
                <label for="age">Age</label>
                <input type="text" class="form-control" name="age" id="age">
            </div>
            <div class="form-group">
                <label for="business_travel">Business travel</label>
                <select class="form-control" name="business_travel" id="business_travel">
                    <option value="1">Rarely</option>
                    <option value="2">Frequently</option>
                    <option value="3">Non-Travel</option>
                </select>
            </div>
            <div class="form-group">
                <label for="daily_rate">Daily rate</label>
                <input type="text" class="form-control" name="daily_rate" id="daily_rate">
            </div>
            <div class="form-group">
                <label for="distance_from_home">Distance from home</label>
                <input type="text" class="form-control" name="distance_from_home" id="distance_from_home">
            </div>
            <div class="form-group">
                <label for="education">Education</label>
                <select class="form-control" name="education" id="education">
                    <option value="1">Below College</option>
                    <option value="2">College</option>
                    <option value="3">Bachelor</option>
                    <option value="4">Master</option>
                    <option value="5">Doctor</option>
                </select>
            </div>
            <div class="form-group">
                <label for="education_field">Education field</label>
                <select class="form-control" name="education_field" id="education_field">
                    <option value="1">Life Sciences</option>
                    <option value="2">Medical</option>
                    <option value="3">Technical Degree</option>
                    <option value="4">Human Resources</option>
                    <option value="5">Other</option>
                </select>
            </div>
            <div class="form-group">
                <label for="employee_count">Employee count</label>
                <input type="text" class="form-control" name="employee_count" id="employee_count">
            </div>
            <div class="form-group">
                <label for="employee_number">Employee number</label>
                <input type="text" class="form-control" name="employee_number" id="employee_number">
            </div>
            <div class="form-group">
                <label for="environment_satisfaction">Environment satisfaction</label>
                <select class="form-control" name="environment_satisfaction" id="environment_satisfaction">
                    <option value="1">Low</option>
                    <option value="2">Medium</option>
                    <option value="3">High</option>
                    <option value="4">Very High</option>
                </select>
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <select class="form-control" name="gender" id="gender">
                    <option value="1">Male</option>
                    <option value="2">Female</option>
                </select>
            </div>
            <div class="form-group">
                <label for="hourly_rate">Hourly rate</label>
                <input type="text" class="form-control" name="hourly_rate" id="hourly_rate">
            </div>
            <div class="form-group">
                <label for="job_involvement">Job involvement</label>
                <select class="form-control" name="job_involvement" id="job_involvement">
                    <option value="1">Low</option>
                    <option value="2">Medium</option>
                    <option value="3">High</option>
                    <option value="4">Very High</option>
                </select>
            </div>
            <div class="form-group">
                <label for="job_lavel">Job lavel</label>
                <select class="form-control" name="job_lavel" id="job_lavel">
                    <option value="1">Low</option>
                    <option value="2">Medium</option>
                    <option value="3">High</option>
                    <option value="4">Very High</option>
                </select>
            </div>
            <div class="form-group">
                <label for="job_role">Job role</label>
                <select class="form-control" name="job_role" id="job_role">
                    <option value="1">Sales Executive</option>
                    <option value="2">Research Scientist</option>
                    <option value="3">Laboratory Technician</option>
                    <option value="4">Human Resources</option>
                    <option value="5">Manufacturing Director</option>
                    <option value="6">Research Director</option>
                    <option value="7">Sales Representative</option>
                    <option value="8">Other</option>
                </select>
            </div>
            <div class="form-group">
                <label for="job_satisfaction">Job satisfaction</label>
                <select class="form-control" name="job_satisfaction" id="job_satisfaction">
                    <option value="1">Low</option>
                    <option value="2">Medium</option>
                    <option value="3">High</option>
                    <option value="4">Very High</option>
                </select>
            </div>
            <div class="form-group">
                <label for="marital_status">Marital status</label>
                <select class="form-control" name="marital_status" id="marital_status">
                    <option value="1">Single</option>
                    <option value="2">Married</option>
                    <option value="3">Divorced</option>
                </select>
            </div>
            <div class="form-group">
                <label for="monthly_income">Monthly income</label>
                <input type="text" class="form-control" name="monthly_income" id="monthly_income">
            </div>
            <div class="form-group">
                <label for="monthly_rate">Monthly rate</label>
                <input type="text" class="form-control" name="monthly_rate" id="monthly_rate">
            </div>
            <div class="form-group">
                <label for="num_companies_worked">Number companies worked</label>
                <input type="text" class="form-control" name="num_companies_worked" id="num_companies_worked">
            </div>
            <div class="form-group">
                <label for="over_time">Over time</label>
                <select class="form-control" name="over_time" id="over_time">
                    <option value="0">Yes</option>
                    <option value="1">No</option>
                </select>
            </div>
            <div class="form-group">
                <label for="percent_salary_hike">Percent salary hike</label>
                <input type="text" class="form-control" name="percent_salary_hike" id="percent_salary_hike">
            </div>
            <div class="form-group">
                <label for="performance_rating">Performance rating</label>
                <input type="text" class="form-control" name="performance_rating" id="performance_rating">
            </div>
            <div class="form-group">
                <label for="relationship_satisfaction">Relationship satisfaction</label>
                <input type="text" class="form-control" name="relationship_satisfaction" id="relationship_satisfaction">
            </div>
            <div class="form-group">
                <label for="standard_hours">Standard hours</label>
                <input type="text" class="form-control" name="standard_hours" id="standard_hours">
            </div>
            <div class="form-group">
                <label for="stock_option_level">Stock option level</label>
                <input type="text" class="form-control" name="stock_option_level" id="stock_option_level">
            </div>
            <div class="form-group">
                <label for="total_working_years">Total working years</label>
                <input type="text" class="form-control" name="total_working_years" id="total_working_years">
            </div>
            <div class="form-group">
                <label for="training_times_last_year">Training times last year</label>
                <input type="text" class="form-control" name="training_times_last_year" id="training_times_last_year">
            </div>
            <div class="form-group">
                <label for="work_life_balance">Work life balance</label>
                <input type="text" class="form-control" name="work_life_balance" id="work_life_balance">
            </div>
            <div class="form-group">
                <label for="years_at_company">Years at company</label>
                <input type="text" class="form-control" name="years_at_company" id="years_at_company">
            </div>
            <div class="form-group">
                <label for="years_in_current_role">Years in current role</label>
                <input type="text" class="form-control" name="years_in_current_role" id="years_in_current_role">
            </div>
            <div class="form-group">
                <label for="years_since_last_promotion">Years since last promotion</label>
                <input type="text" class="form-control" name="years_since_last_promotion" id="years_since_last_promotion">
            </div>
            <div class="form-group">
                <label for="years_with_curr_manager">Years with curr manager</label>
                <input type="text" class="form-control" name="years_with_curr_manager" id="years_with_curr_manager">
            </div>
            <div class="form-group">
                <label for="title">Team</label>
                <select class="form-control" name="team_id" id="team_id">
                    @foreach($teams as $team)
                    <option value={{$team->id}}>{{$team->name}}</option>
                    @endforeach
                </select>
            </div>
        <input type="submit" class="btn btn-success" value="Submit">
        </form>
    </div>
@endsection
