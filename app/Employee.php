<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'name', 'email', 'role', 'team_id', 'age', 'attrition', 'business_travel', 'daily_rate', 'department',
'distance_from_home', 'education', 'education_field', 'employee_count', 'employee_number', 'environment_satisfaction', 'gender',
'hourly_rate', 'job_involvement', 'job_lavel', 'job_role', 'job_satisfaction', 'marital_status', 'monthly_income',
'monthly_rate', 'num_companies_worked', 'over_time', 'percent_salary_hike', 'performance_rating', 'relationship_satisfaction',
'standard_hours', 'stock_option_level', 'total_working_years', 'training_times_last_year', 'work_life_balance',
'years_at_company', 'years_in_current_role', 'years_since_last_promotion', 'years_with_curr_manager'
    ];

    public function team()
    {
        return $this->belongsTo('App\Team');
    }

    public function rating()
    {
        return $this->hasMany('App\Rating');
    }

    public function report()
    {
        return $this->hasMany('App\Report');
    }
}
