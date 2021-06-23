<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = [
        'employee_id', 'criterion', 'period', 'rating'
    ];

    public function employee()
    {
        return $this->belongsTo('App\Employee');
    }
}
