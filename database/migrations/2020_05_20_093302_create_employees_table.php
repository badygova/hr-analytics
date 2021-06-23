<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('email')->unique();
            $table->bigInteger('team_id')->unsigned();
            $table->foreign('team_id')->references('id')->on('teams');
            $table->integer('age');
            $table->string('attrition')->default('0');
            $table->string('business_travel');
            $table->integer('daily_rate');
            $table->string('department');
            $table->integer('distance_from_home');
            $table->integer('education');
            $table->string('education_field');
            $table->integer('employee_count');
            $table->integer('employee_number');
            $table->integer('environment_satisfaction');
            $table->string('gender');
            $table->integer('hourly_rate');
            $table->integer('job_involvement');
            $table->integer('job_lavel');
            $table->string('job_role');
            $table->integer('job_satisfaction');
            $table->string('marital_status');
            $table->integer('monthly_income');
            $table->integer('monthly_rate');
            $table->integer('num_companies_worked');
            $table->string('over_time');
            $table->integer('percent_salary_hike');
            $table->integer('performance_rating');
            $table->integer('relationship_satisfaction');
            $table->integer('standard_hours');
            $table->integer('stock_option_level');
            $table->integer('total_working_years');
            $table->integer('training_times_last_year');
            $table->integer('work_life_balance');
            $table->integer('years_at_company');
            $table->integer('years_in_current_role');
            $table->integer('years_since_last_promotion');
            $table->integer('years_with_curr_manager');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('employees');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
