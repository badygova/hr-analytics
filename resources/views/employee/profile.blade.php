@extends('layouts.app')


@section('content')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
    <div class="container">
        <div class="container">
            <section class="member-details">
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-lg-3 col-md-4">
                            <div class="img-container">
                                @isset($path)
                                    <img src="{{asset ('https://hr360app.s3.us-east-2.amazonaws.com/'.$path)}}" alt="team member" class="img-thumbnail">
                                @endisset
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-8">
                            <div class="member_designation">
                                <h2>{{ $employee->name }}</h2>
                                <span><br><b>Attrition - {{ $employee->attrition}}<br></b></span><br>
                                <span>Team - {{ $employee->team->name}}</span><br>
                                <span>Email - {{ $employee->email}}</span><br>

                                <span>Age - {{ $employee->age}}</span><br>
                                <span>Daily rate - {{ $employee->daily_rate}}</span><br>
                                <span>Business travel - {{ $employee->business_travel}}</span><br>
                                <span>Distance from home - {{ $employee->distance_from_home}}</span><br>
                                <span>Education - {{ $employee->education}}</span><br>
                                <span>Education field - {{ $employee->education_field}}</span><br>
                                <span>Employee count - {{ $employee->employee_count}}</span><br>
                                <span>employee_number - {{ $employee->employee_number}}</span><br>
                                <span>Environment satisfaction - {{ $employee->environment_satisfaction}}</span><br>
                                <span>Gender - {{ $employee->gender}}</span><br>
                                <span>Hourly rate - {{ $employee->hourly_rate}}</span><br>
                                <span>Job involvement - {{ $employee->job_involvement}}</span><br>
                                <span>Job lavel - {{ $employee->job_lavel}}</span><br>
                                <span>Job role - {{ $employee->job_role}}</span><br>
                                <span>Job satisfaction - {{ $employee->job_satisfaction}}</span><br>
                                <span>Marital status - {{ $employee->marital_status}}</span><br>
                                <span>Monthly income - {{ $employee->monthly_income}}</span><br>
                                <span>Monthly rate - {{ $employee->monthly_rate}}</span><br>
                                <span>Number companies worked - {{ $employee->num_companies_worked}}</span><br>
                                <span>Over time - {{ $employee->over_time}}</span><br>
                                <span>Percent salary hike - {{ $employee->percent_salary_hike}}</span><br>
                                <span>Performance rating - {{ $employee->performance_rating}}</span><br>
                                <span>Relationship satisfaction - {{ $employee->relationship_satisfaction}}</span><br>
                                <span>Standard hours - {{ $employee->standard_hours}}</span><br>
                                <span>Stock option level - {{ $employee->stock_option_level}}</span><br>
                                <span>Performance rating - {{ $employee->performance_rating}}</span><br>
                                <span>Total working years - {{ $employee->total_working_years}}</span><br>
                                <span>Training times last year - {{ $employee->training_times_last_year}}</span><br>
                                <span>Work life balance - {{ $employee->work_life_balance}}</span><br>
                                <span>Years at company - {{ $employee->years_at_company}}</span><br>
                                <span>Years in current role - {{ $employee->years_in_current_role}}</span><br>
                                <span>Years since last promotion - {{ $employee->years_since_last_promotion}}</span><br>
                                <span>Years with curr manager - {{ $employee->years_with_curr_manager}}</span><br>

                                <div class="form-group">
                                <a href="/employee/{{$employee->id}}/edit" class="btn btn-success"> Edit</a>
                                <form action="/employee/{{$employee->id}}/delete" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" value="data">
                                    <input type="submit" class="btn btn-success" value="Delete" >
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

    </div>
@endsection


